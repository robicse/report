<?php
	class PDF extends FPDF
		{
			//Load data
			function LoadData($file)
			{
				//Read file lines
				$lines=file($file);
				$data=array();
				foreach($lines as $line)
					$data[]=explode(';',chop($line));
				return $data;
			}

			//Simple table
			function BasicTable($header,$data)
			{
				//Header
				//$w=array(30,30,55,25,20,20);
				$w=array(5,20,20,20,20,10,20,15,15,15,20,15);
				//Header
				for($i=0;$i<count($header);$i++)
					//$this->Cell($w[$i],7,$header[$i],1,0,'C');
					$this->Cell($w[$i],12,$header[$i],1,0,'C');
				$this->Ln();
				//Data
				foreach ($data as $eachResult) 
				{
					$this->Cell(5,12,$eachResult->id,1);
					$this->Cell(20,12,$eachResult->created_time,1);
					$this->Cell(20,12,$eachResult->caller_number,1);
					$this->Cell(20,12,$eachResult->caller_name,1);
					$this->Cell(20,12,$eachResult->baby_name,1);
					$this->Cell(10,12,$eachResult->dob,1);
					$this->Cell(20,12,$eachResult->age_of_today,1);
					$this->Cell(15,12,$eachResult->address,1);
					$this->Cell(15,12,$eachResult->division,1);
					$this->Cell(15,12,$eachResult->source,1);
					$this->Cell(20,12,$eachResult->dr_call_type,1);
					$this->Cell(15,12,$eachResult->prescript,1);
					//$this->Cell(25,6,$eachResult["CountryCode"],1,0,'C');
					/* $this->Cell(20,6,$eachResult["Budget"],1);
					$this->Cell(20,6,$eachResult["Budget"],1); */
					$this->Ln();
				}
			}


		}
?>