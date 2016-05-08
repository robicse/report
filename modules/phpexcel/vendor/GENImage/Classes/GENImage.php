<?php
class GENImage {
	protected $img;
	protected $img_copy;
	protected $quality = 90;
	protected $fontFile;
	protected $fontSize = 12;
	protected $alignVertical = 'top';
	protected $alignHorizontal = 'left';
	protected $textColor = array(255, 255, 255);
	protected $textOpacity = 1;
	protected $textAngle = 0;
	protected $strokeWidth = 0;
	protected $strokeColor = array(0, 0, 0);
	protected $width;
	protected $height;
	protected $type;
	protected $folderMode = 0755;
	public function __construct($mixed=null, $height=null){
		if (!extension_loaded('gd') && !extension_loaded('gd2')) {
			$this->handleError('GD is not loaded');
			return false;
		}
		if($mixed !== null && $height !== null){
			$this->initialiseCanvas($mixed, $height);
		}else if($mixed !== null && is_string($mixed)){
			$image = $this->setDimensionsFromImage($mixed);
			$image->draw($mixed);
			return $image;
		}
	}
	protected function initialiseCanvas($width, $height, $resource='img'){
		$this->width = $width;
		$this->height = $height;
		unset($this->$resource);
		$this->$resource = imagecreatetruecolor($this->width, $this->height);
		imagesavealpha($this->$resource, true);
		imagealphablending($this->$resource, false);
		imagefilledrectangle($this->$resource, 0, 0, $this->width, $this->height, imagecolorallocatealpha($this->$resource, 0, 0, 0, 127));
		imagealphablending($this->$resource, true);
		return $this;
	}
	protected function afterUpdate(){
		$this->shadowCopy();
	}
	protected function shadowCopy(){
		$this->initialiseCanvas($this->width, $this->height, 'img_copy');
		imagecopy($this->img_copy, $this->img, 0, 0, 0, 0, $this->width, $this->height);
	}
	public function __clone(){
		$this->initialiseCanvas($this->width, $this->height);
		imagecopy($this->img, $this->img_copy, 0, 0, 0, 0, $this->width, $this->height);
	}
	public function getResource(){
		return $this->img;
	}
	public function setResource($resource){
		$this->img = $resource;
		return $this;
	}
	public function setDimensionsFromImage($file){
		if($info = $this->getImageInfo($file, false)){
			$this->initialiseCanvas($info->width, $info->height);
			return $this;
		} else {
			$this->handleError($file . ' is not readable!');
		}
	}
	protected function getImageInfo($file, $returnResource=true){
		if (preg_match('#^https?://#i', $file)) {
			$headers = get_headers($file, 1);
			if (is_array($headers['Content-Type'])) {
				$contenttype = $headers['Content-Type'][0];
			} else {
				$contenttype = $headers['Content-Type'];
			}
			if (preg_match('#^image/(jpe?g|png|gif)$#i', $contenttype)) {
				switch(true){
					case stripos($contenttype, 'jpeg') !== false:
					case stripos($contenttype, 'jpg') !== false:
						$img = imagecreatefromjpeg($file);
						$type = IMAGETYPE_JPEG;
						break;
					case stripos($contenttype, 'png') !== false:
						$img = imagecreatefrompng($file);
						$type = IMAGETYPE_PNG;
						break;
					case stripos($contenttype, 'gif') !== false:
						$img = imagecreatefromgif($file);
						$type = IMAGETYPE_GIF;
						break;
					default:
						return false;
						break;
				}
				$width = imagesx($img);
				$height = imagesy($img);
				if (!$returnResource) {
					imagedestroy($img);
				}
			} else {
				return false;
			}
		} elseif (is_readable($file)) {
			list($width, $height, $type) = getimagesize($file);
			switch($type){
				case IMAGETYPE_GIF:
					if ($returnResource) {
						$img = imagecreatefromgif($file);
					}
					break;
				case IMAGETYPE_JPEG:
					if ($returnResource) {
						$img = imagecreatefromjpeg($file);
					}
					break;
				case IMAGETYPE_PNG:
					if ($returnResource) {
						$img = imagecreatefrompng($file);
					}
					break;
				default:
					return false;
					break;
			}
		} else {
			return false;
		}
		$info = new \stdClass();
		$info->type = $type;
		if($this->type === null){
			$this->type = $type;
		}
		$info->width = $width;
		$info->height = $height;
		if ($returnResource) {
			$info->resource = $img;
		}
		return $info;
	}
	protected function handleError($error){
		throw new \Exception($error);
	}
	public function rotate($angle, $bgd_color=0, $ignore_transparent=0){
		$this->img = imagerotate($this->img, $angle, 0);
		$this->afterUpdate();
		return $this;
	}
	public function crop($x, $y, $width, $height){
		$tmp = $this->img;
		$this->initialiseCanvas($width, $height);
		imagecopyresampled($this->img, $tmp, 0, 0, $x, $y, $width, $height, $width, $height);
		imagedestroy($tmp);
		$this->afterUpdate();
		return $this;
	}
	public function batchResize($path, $dimensions=array()){
		if(is_array($dimensions) && count($dimensions) > 0){
			$width = $this->width;
			$height = $this->height;
			$copy = imagecreatetruecolor($width, $height);
			imagecopy($copy, $this->img, 0, 0, 0, 0, $width, $height);
			foreach($dimensions as $args){
				$this->initialiseCanvas($width, $height);
				imagecopy($this->img, $copy, 0, 0, 0, 0, $width, $height);
				call_user_func_array(array($this, 'resize'), $args);
				$this->save(sprintf($path, $args[0], $args[1]));
			}
			$this->initialiseCanvas($width, $height);
			imagecopy($this->img, $copy, 0, 0, 0, 0, $width, $height);
			imagedestroy($copy);
		}
		return $this;
	}
	public function resize($targetWidth, $targetHeight, $crop=false, $upscale=false){
		$width = $this->width;
		$height = $this->height;
		$canvasWidth = $targetWidth;
		$canvasHeight = $targetHeight;
		$r = $width / $height;
		$x = 0;
		$y = 0;
		if ($crop !== false) {
			if($crop === true){
				$crop = 'C';
			}
			if ($targetWidth/$targetHeight > $r) {
				$newheight = intval($targetWidth/$r);
				$newwidth = $targetWidth;
				switch($crop){
					case 'T':
						$y = 0;
						break;
					case 'B':
						$y = intval(($newheight - $targetHeight) * ($height / $newheight));
						break;
					case 'C':
					default:
						$y = intval((($newheight - $targetHeight) / 2) * ($height / $newheight));
						break;
				}
			} else {
				$newwidth = intval($targetHeight*$r);
				$newheight = $targetHeight;
				switch($crop){
					case 'L':
						$x = 0;
						break;
					case 'R':
						$x = intval(($newwidth - $targetWidth) * ($width / $newwidth));
						break;
					case 'C':
					default:
						$x = intval((($newwidth - $targetWidth) / 2) * ($width / $newwidth));
						break;
				}
			}
			if($upscale === false){
				if($newwidth > $width){
					$x = 0;
					$newwidth = $width;
					$canvasWidth = $newwidth;
				}
				if($newheight > $height){
					$y = 0;
					$newheight = $height;
					$canvasHeight = $newheight;
				}
			}
		} else {
			if ($targetWidth/$targetHeight > $r) {
				$newwidth = intval($targetHeight*$r);
				$newheight = $targetHeight;
			} else {
				$newheight = intval($targetWidth/$r);
				$newwidth = $targetWidth;
			}
			if($upscale === false){
				if($newwidth > $width){
					$newwidth = $width;
				}
				if($newheight > $height){
					$newheight = $height;
				}
			}
			$canvasWidth = $newwidth;
			$canvasHeight = $newheight;
		}
		$tmp = $this->img;
		$this->initialiseCanvas($canvasWidth, $canvasHeight);
		imagecopyresampled($this->img, $tmp, 0, 0, $x, $y, $newwidth, $newheight, $width, $height);
		imagedestroy($tmp);
		$this->afterUpdate();
		return $this;
	}
	public function show(){
		switch($this->type){
			case IMAGETYPE_GIF:
				header('Content-type: image/gif');
				imagegif($this->img, null);
				break;
			case IMAGETYPE_PNG:
				header('Content-type: image/png');
				imagepng($this->img, null, $this->quality);
				break;
			default:
				header('Content-type: image/jpeg');
				imagejpeg($this->img, null, $this->quality);
				break;
		}
		$this->cleanup();
	}
	public function cleanup(){
		imagedestroy($this->img);
	}
	public function save($path, $show=false, $destroy=true){
		if (!is_writable(dirname($path))) {
			if (!mkdir(dirname($path), $this->folderMode, true)) {
				$this->handleError(dirname($path) . ' is not writable and failed to create directory structure!');
			}
		}
		if (is_writable(dirname($path))) {
			switch($this->type){
				case IMAGETYPE_GIF:
					imagegif($this->img, $path);
					break;
				case IMAGETYPE_PNG:
					imagepng($this->img, $path, $this->quality);
					break;
				default:
					imagejpeg($this->img, $path, $this->quality);
					break;
			}
		} else {
			$this->handleError(dirname($path) . ' is not writable!');
		}
		if($show){
			$this->show();
			return;
		}
		if($destroy){
			$this->cleanup();
		}else{
			return $this;
		}
	}
	public function snapshot($path){
		return $this->save($path, false, false);
	}
	public function showAndSave($path){
		$this->save($path, true);
	}
	public function line($x1=0, $y1=0, $x2=100, $y2=100, $colour=array(0, 0, 0), $opacity=1.0, $dashed=false){
		if($dashed === true){
			imagedashedline($this->img, $x1, $y1, $x2, $y2, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127));
		}else{
			imageline($this->img, $x1, $y1, $x2, $y2, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127));
		}
		$this->afterUpdate();
		return $this;
	}
	public function rectangle($x=0, $y=0, $width=100, $height=50, $colour=array(0, 0, 0), $opacity=1.0, $outline=false){
		if($outline === true){
			imagerectangle($this->img, $x, $y, $x + $width, $y + $height, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127));
		}else{
			imagefilledrectangle($this->img, $x, $y, $x + $width, $y + $height, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127));
		}
		$this->afterUpdate();
		return $this;
	}
	public function square($x=0, $y=0, $width=100, $colour=array(0, 0, 0), $opacity=1.0, $outline=false){
		return $this->rectangle($x, $y, $width, $width, $colour, $opacity, $outline);
	}
	public function ellipse($x=0, $y=0, $width=100, $height=50, $colour=array(0, 0, 0), $opacity=1.0, $outline=false){
		if($outline === true){
			imageellipse($this->img, $x, $y, $width, $height, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127));
		}else{
			imagefilledellipse($this->img, $x, $y, $width, $height, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127));
		}
		$this->afterUpdate();
		return $this;
	}
	public function circle($x=0, $y=0, $width=100, $colour=array(0, 0, 0), $opacity=1.0, $outline=false){
		return $this->ellipse($x, $y, $width, $width, $colour, $opacity, $outline);
	}
	public function polygon($points=array(), $colour=array(0, 0, 0), $opacity=1.0, $outline=false){
		if(count($points) > 0){
			if($outline === true){
				imagepolygon($this->img, $points, count($points) / 2, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127));
			}else{
				imagefilledpolygon($this->img, $points, count($points) / 2, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127));
			}
			$this->afterUpdate();
		}
		return $this;
	}
	public function arc($x=0, $y=0, $width=100, $height=50, $start=0, $end=180, $colour=array(0, 0, 0), $opacity=1.0, $outline=false){
		if($outline === true){
			imagearc($this->img, $x, $y, $width, $height, $start, $end, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127));
		}else{
			imagefilledarc($this->img, $x, $y, $width, $height, $start, $end, imagecolorallocatealpha($this->img, $colour[0], $colour[1], $colour[2], (1 - $opacity) * 127), IMG_ARC_PIE);
		}
		$this->afterUpdate();
		return $this;
	}
	public function draw($file, $x='50%', $y='50%'){
		if($info = $this->getImageInfo($file)){
			$image = $info->resource;
			$width = $info->width;
			$height = $info->height;
			if(strpos($x, '%') === false && !is_numeric($x) && !in_array($x, array('left', 'center', 'right'))){
				$x = '50%';
			}
			if(strpos($y, '%') === false && !is_numeric($y) && !in_array($y, array('top', 'center', 'bottom'))){
				$y = '50%';
			}
			switch($x){
				case 'left':
					$x = '0%';
					break;
				case 'center':
					$x = '50%';
					break;
				case 'right':
					$x = '100%';
					break;
			}
			switch($y){
				case 'top':
					$y = '0%';
					break;
				case 'center':
					$y = '50%';
					break;
				case 'bottom':
					$y = '100%';
					break;
			}
			if(strpos($x, '%') > -1){
				$x = str_replace('%', '', $x);
				$x = ceil(($this->width - $width) * ($x / 100));
			}
			if(strpos($y, '%') > -1){
				$y = str_replace('%', '', $y);
				$y = ceil(($this->height - $height) * ($y / 100));
			}
			imagecopyresampled(
				$this->img,
				$image,
				$x,
				$y,
				0,
				0,
				$width,
				$height,
				$width,
				$height
			);
			imagedestroy($image);
			$this->afterUpdate();
			return $this;
		} else {
			$this->handleError($file . ' is not a valid image!');
		}
	}
	public function text($text, $options=array()){
		foreach($options as $k => $v){
			if($options[$k] === null){
				unset($options[$k]);
			}
		}
		$defaults = array(
			'fontSize' => $this->fontSize,
			'fontColor' => $this->textColor,
			'opacity' => $this->textOpacity,
			'x' => 0,
			'y' => 0,
			'width' => null,
			'height' => null,
			'alignHorizontal' => $this->alignHorizontal,
			'alignVertical' => $this->alignVertical,
			'angle' => $this->textAngle,
			'strokeWidth' => $this->strokeWidth,
			'strokeColor' => $this->strokeColor,
			'fontFile' => $this->fontFile,
			'autoFit' => true,
			'debug' => false
		);
		extract(array_merge($defaults, $options), EXTR_OVERWRITE);
		if($fontFile === null){
			$this->handleError('No font file set!');
		}
		if(is_int($width) && $autoFit){
			$fontSize = $this->fitToWidth($fontSize, $angle, $fontFile, $text, $width);
		}
		$testbox = imagettfbbox($fontSize, $angle, $fontFile, $text);
		$offsety = abs($testbox[7]);
		$offsetx = 0;
		$actualWidth = abs($testbox[6] - $testbox[4]);
		$actualHeight = abs($testbox[1] - $testbox[7]);
		if(is_int($width) || is_int($height)){
			if(!is_int($width)){
				$width = $actualWidth;
			}
			if(!is_int($height)){
				$height = $actualHeight;
			}
			if($debug){
				$this->rectangle($x, $y, $width, $height, array(0, 255, 255), 0.5);
			}
			switch($alignHorizontal){
				case 'center':
					$offsetx += (($width - $actualWidth) / 2);
					break;
				case 'right':
					$offsetx += ($width - $actualWidth);
					break;
			}
			switch($alignVertical){
				case 'center':
					$offsety += (($height - $actualHeight) / 2);
					break;
				case 'bottom':
					$offsety += ($height - $actualHeight);
					break;
			}
		}
		if($strokeWidth > 0){
			$strokeColor = imagecolorallocatealpha($this->img, $strokeColor[0], $strokeColor[1], $strokeColor[2], (1 - $opacity) * 127);
			for($sx = ($x-abs($strokeWidth)); $sx <= ($x+abs($strokeWidth)); $sx++){
				for($sy = ($y-abs($strokeWidth)); $sy <= ($y+abs($strokeWidth)); $sy++){
					imagettftext($this->img, $fontSize, $angle, $sx + $offsetx, $sy + $offsety, $strokeColor, $fontFile, $text);
				}
			}
		}
		imagettftext($this->img, $fontSize, $angle, $x + $offsetx, $y + $offsety, imagecolorallocatealpha($this->img, $fontColor[0], $fontColor[1], $fontColor[2], (1 - $opacity) * 127), $fontFile, $text);
		$this->afterUpdate();
		return $this;
	}
	protected function fitToWidth($fontSize, $angle, $fontFile, $text, $width){
		while($fontSize > 0){
			$testbox = imagettfbbox($fontSize, $angle, $fontFile, $text);
			$actualWidth = abs($testbox[6] - $testbox[4]);
			if($actualWidth <= $width){
				return $fontSize;
			}else{
				$fontSize--;
			}
		}
		return $fontSize;
	}
	protected function fitToBounds($fontSize, $angle, $fontFile, $text, $width, $height){
		while($fontSize > 0){
			$wrapped = $this->wrap($text, $width, $fontSize, $angle, $fontFile);
			$testbox = imagettfbbox($fontSize, $angle, $fontFile, $wrapped);
			$actualHeight = abs($testbox[1] - $testbox[7]);
			if($actualHeight <= $height){
				return $fontSize;
			}else{
				$fontSize--;
			}
		}
		return $fontSize;
	}
	public function textBox($text, $options=array()){
		$defaults = array(
			'fontSize' => $this->fontSize,
			'fontColor' => $this->textColor,
			'opacity' => $this->textOpacity,
			'x' => 0,
			'y' => 0,
			'width' => 100,
			'height' => null,
			'angle' => $this->textAngle,
			'strokeWidth' => $this->strokeWidth,
			'strokeColor' => $this->strokeColor,
			'fontFile' => $this->fontFile
		);
		extract(array_merge($defaults, $options), EXTR_OVERWRITE);
		if ($height) {
			$fontSize = $this->fitTobounds($fontSize, $angle, $fontFile, $text, $width, $height);
		}
		return $this->text($this->wrap($text, $width, $fontSize, $angle, $fontFile), array('fontSize' => $fontSize, 'x' => $x, 'y' => $y, 'angle' => $angle, 'strokeWidth' => $strokeWidth, 'opacity' => $opacity, 'fontColor' => $fontColor, 'strokeColor' => $strokeColor, 'fontFile' => $fontFile));
	}
	protected function wrap($text, $width=100, $fontSize=12, $angle=0, $fontFile=null){
		if($fontFile === null){
			$fontFile = $this->fontFile;
		}
		$ret = "";
		$arr = explode(' ', $text);
		foreach ($arr as $word){
			$teststring = $ret . ' ' . $word;
			$testbox = imagettfbbox($fontSize, $angle, $fontFile, $teststring);
			if ($testbox[2] > $width){
				$ret .= ($ret == "" ? "" : "\n") . $word;
			} else {
				$ret .= ($ret == "" ? "" : ' ') . $word;
			}
		}
		return $ret;
	}
	public function checkQuality(){
		switch($this->type){
			case IMAGETYPE_PNG:
				if($this->type > 9){
					$this->quality = 3;
				}
				break;
		}
		return $this;
	}
	public function setFolderMode($mode=0755){
		$this->folderMode = $mode;
		return $this;
	}
	public function setFontSize($size=12){
		$this->fontSize = $size;
		return $this;
	}
	public function setAlignVertical($align='top'){
		$this->alignVertical = $align;
		return $this;
	}
	public function setAlignHorizontal($align='left'){
		$this->alignHorizontal = $align;
		return $this;
	}
	public function setTextColor($colour=array(255, 255, 255)){
		$this->textColor = $colour;
		return $this;
	}
	public function setTextAngle($angle=0){
		$this->textAngle = $angle;
		return $this;
	}
	public function setStrokeWidth($strokeWidth=0){
		$this->strokeWidth = $strokeWidth;
		return $this;
	}
	public function setTextOpacity($opacity=1.0){
		$this->textOpacity = $opacity;
		return $this;
	}
	public function setStrokeColor($colour=array(0, 0, 0)){
		$this->strokeColor = $colour;
		return $this;
	}
	public function setFont($fontFile){
		$this->fontFile = $fontFile;
		return $this;
	}
	public function setQuality($quality){
		$this->quality = $quality;
		return $this;
	}
	public function setOutput($type, $quality = null){
		switch(strtolower($type)){
			case 'gif':
				$this->type = IMAGETYPE_GIF;
				break;
			case 'jpg':
				$this->type = IMAGETYPE_JPEG;
				break;
			case 'png':
				$this->type = IMAGETYPE_PNG;
				break;
		}
		if($quality !== null){
			$this->setQuality($quality);
		}
		return $this;
	}
}
