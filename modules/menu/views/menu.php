<ul class="sidebar-menu treeview-menu">
<?php
	foreach ($menu['items'] as &$item):
		$classes = '';
		if (isset($item['classes'])) {
			$classes = ''.join(' ', $item['classes']).'';
		}
?>
	<li>
	<?php
		echo '<a href="'.$item['url'].'"><i class="material-icons test">'.$classes.'</i>&thinsp;&thinsp;&thinsp;&thinsp;<span>'. $item['title'].'</span></a>';
		if (isset($item['items']))
		{
			$items = array('items' => &$item['items']);
			echo View::factory('menu')->bind('menu', $items)->render();
		}
	?>
	</li>
<?php endforeach; ?>
</ul>