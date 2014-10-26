<?php
	function print_electrical_resources($title, $array, $level,$id) {
		if($level === 1) {
			echo "\n".'<br /><br />';
			echo "\n".'<div class="center">';
		}
		if($id !== NULL) {
			echo "\n".'<h'.$level.' id="'.$id.'">'.$title.'</h'.$level.'>'."\n";
		} else {
			echo "\n".'<h'.$level.'>'.$title.'</h'.$level.'>'."\n";
		}
		if($level === 1) {
			echo '</div>'."\n";
		}
		
		echo '<ul class="linkList">'."\n";
		foreach($array as $name => $url) {
			echo "\t".'<li>'."\n";
				if((substr($url, 0, 6) === 'http://') || (substr($url, 0, 7) === 'https://')) {
					echo "\t\t".'<a href="'.$url.'">'.$name.'</a>'."\n";
				} else {
					echo "\t\t".'<a href="'.$rootDir.$url.'">'.$name.'</a>'."\n";
				}
			echo "\t".'</li>'."\n";
		}
		echo '</ul>'."\n";
	}
?>

<div class="center">
	<h1>3946 Electrical Resources</h1>
	<!-- Page Sections: <br /> -->
	<?php
		/*
		$sections_array = array(
			'lessons',
			'supplements',
			'tutorials',
			'setup',
			'other'
		);
		foreach($sections_array as $index => $id) {
			if($id == 'other') {
				echo '<a href="#'.$id.'">Other Teams</a> ';
			} else {
				echo '<a href="#'.$id.'">'.ucwords($id).'</a> ';
			}
		}
		*/
	?>
</div>
<div class="center">
	None currently. Check Back Later.
</div>
