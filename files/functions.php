<?php
	//Global Variables
	$media_albums = './media/photos';
	$media_sponsors = './media/sponsors';

	//Recursive (Potentially N-Level) NavBar output
	//Currently 3 level due to JavaScript limitation...
	function display_nav($array, $rec=false)
	{
		foreach($array as $title => $link)
		{
			if(!(is_array($link)))
			{
				echo '<li'.((!$rec && isset($_GET['p']) && $_GET['p'] == $link)? ' class="active"' : '').'>';
				echo '<a href="'.((substr($link,0,4) == 'http' || substr($link,0,2) == './')? $link : 'index.php?p='.$link).'">'.$title.'</a>';
				echo '</li>';

			} else {
				echo '<li class="dropdown">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$title.' <span class="caret" ></span></a>';

				echo '<ul class="dropdown-menu">';

				display_nav($link, true); //recursion for multilevel menu

				echo '</ul>';
				echo '</li>';
			}
		}
	}

	//Display Sponsors array in Pic_Title => URL format
	//Row_size controls how many images are in a row
	function display_sponsors($sponsor_array, $image_directory)
	{
		$i = 0; //for Row Management
		foreach($sponsor_array as $level => $sponsors)
		{
			echo '<div class="h1 text-center">'.$level.'</div>';
			foreach($sponsors as $name => $data)
			{
				if($i == 12 || $i+$data['size'] > 12) {echo '</div>'; $i = 0;} //end row
				if($i == 0) { echo '<div class="row sponsor-row">'; } //start new row
				echo '<div class="text-center col-sm-'.$data['size'].'">';
					echo '<a href="'.$data['link'].'">';
						if($data['image'])
							echo '<img class="sponsor" alt="'.$name.'" src="'.$image_directory.'/'.$data['image'].'" />';
						else
							echo $name;
					echo '</a>';
				echo '</div>';

				$i+=$data['size']; //incrament counter
			}
			$i=0;
			echo '</div>';
		}
	}

	//Recursive (7-Level) Title => Link, resource list formatter
	//any use beyond 7th level will be cut-off
	function print_resource_array($array, $level=1)
	{
		if($level > 7) { return; } //no headings beyond 7
		foreach($array as $key => $value)
		{

			if(is_array($value)) //check if we have a sub-array
			{
				echo '<h'.$level.'>'.$key.'</h'.$level.'>'; //output title and make new unordered list
				echo '<ul>';
				print_resource_array($value, $level+1); //recursion, output array one level in
				echo '</ul>';
			}
			else //NOTE: use of else required otherwise titles will be printed as links as well, yay recursion!
			{
				echo '<li><a href="'.$value.'">'.$key.'</a></li>'; //no more arrays, print links!
			}

		}
	}

	//Photo Album!
	function photo_album($directory = './media/photos', $album = false, $title = false, $row_size = 3, $page_size = 15)
	{
		if($album === false && isset($_GET['album'])) //No default album, but album specified
		{
			if(is_numeric($_GET['album'])) //album is an array index
			{
				$albums = get_album_s($directory); //get albums
				$album = $albums[$_GET['album']]; //select album name based on index
			}
			else //album is a title
			{
				$album = $_GET['album'];
			}
		}

		$albums = get_album_s($directory, $album); //get album(s)

		if($albums == -1)//whoops
		{
			echo '<div class="alert alert-danger"><strong>!</strong>Album(s) Not Found</div>';
			return $albums;
		}

		if($album === false) //List all Albums, Photos page more or less
		{
			echo '<h1 class="text-center">Photo Albums</h1>';

			//set current page number
			$page = (isset($_GET['page']) && $_GET['page'] > 0)? $_GET['page']-1 : 0;
			//Output Pagination
			echo '<div class="text-right">';
			gen_pagination(ceil(count($albums)/$page_size),$page+1);
			echo '</div>';

			$i = 0;
			foreach(array_slice($albums, $page*$page_size, $page_size, true) as $key => $data) //output each album
			{
				$pictures = get_pictures($directory.'/'.$data);
				if($pictures !== -1) // Don't bother listing empty albums
				{
					if($i == $row_size) { echo '</div>'; $i = 0; } //reset counter
					if($i == 0) { echo '<div class="row">'; } //start new row

					echo '<div class="text-center col-md-'.floor(12/$row_size).' display">';
					echo '<a href="./index.php?'.get_GET(array('album','image','page')).'&album='.$key.'">';
					if(file_exists($directory.'/'.$data.'/thumbnail.jpg'))
					{
						echo '<div style="margin: 0px; padding: 0px;">';
						echo '<img class="thumbnail" src="'.$directory.'/'.$data.'/thumbnail.jpg'.'" />';
						echo '</div>';
					}
					echo $data.'</a>';
					echo '</div>';

					$i++;
				}
			}
			echo '</div>';

			//set current page number
			$page = (isset($_GET['page']) && $_GET['page'] > 0)? $_GET['page']-1 : 0;
			//Output Pagination
			echo '<div class="text-right">';
			gen_pagination(ceil(count($albums)/$page_size),$page+1);
			echo '</div>';
		}
		else //specific Album
		{
			if($title)
			{
				echo '<h1 class="text-center">'.$albums.'</h1>';
			}
			$pictures = get_pictures($directory.'/'.$albums);
			if($pictures == -1)
			{
				echo '<div class="alert alert-danger"><strong>!</strong>No Pictures Found</div>';
				return $pictures;
			}

			if(!isset($_GET['image'])) //output list of images (plus pagination)
			{
				//set current page number
				$page = (isset($_GET['page']) && $_GET['page'] > 0)? $_GET['page']-1 : 0;
				//Output Pagination
				echo '<div class="text-right">';
				gen_pagination(ceil(count($pictures)/$page_size),$page+1);
				echo '</div>';

				$i = 0;
				foreach(array_slice($pictures, $page*$page_size, $page_size, true) as $key => $data) //output each image for space
				{
					if($i == $row_size) { echo '</div>'; $i = 0; } //reset counter
					if($i == 0) { echo '<div class="row">'; } //start new row

					echo '<div class="text-center col-md-'.floor(12/$row_size).'">';
					echo '<a href="./index.php?'.get_GET(array('image','page')).'&image='.$key.'#album_image">';
					echo '<img class="display" src="'.$directory.'/'.$albums.((file_exists($directory.'/'.$albums.'/thumbs/'.$data)? '/thumbs/':'/')).$data.'" />';
					echo '</a>';
					echo '</div>'."\n";

					$i++;
				}
				echo '</div>';

				//Output Pagination
				echo '<div class="text-right">';
				gen_pagination(ceil(count($pictures)/$page_size),$page+1);
				echo '</div>';
			}
			else //output single image
			{
				echo '<div id="album_image" class="text-center row">'; //navigation
				echo '<div class="text-left col-xs-3">';
				if(array_key_exists(($_GET['image']-1), $pictures)) //there is a previous image
				{
					echo '<a class="btn btn-primary btn-previous" href="./index.php?'.get_GET(array('image')).'&image='.($_GET['image']-1).'#album_image">Prev</a>';
				}
				echo '</div>';
				echo '<div class="text-center col-xs-6">';
				echo '<a class="btn btn-primary" href="./index.php?'.get_GET(array('image')).'">Back to Album</a>';
				echo '</div>';
				echo '<div class="text-right col-xs-3">';
				if(array_key_exists(($_GET['image']+1), $pictures)) //there is a next image
				{
					echo '<a class="btn btn-primary btn-next" href="./index.php?'.get_GET(array('image')).'&image='.($_GET['image']+1).'#album_image">Next</a>';
				}
				echo '</div>';
				echo '</div>';

				echo '<div class="text-center">'; //image
					echo '<img class="album_photo display" src="'.$directory.'/'.$albums.'/'.$pictures[$_GET['image']].'" />';
				echo '</div>';
			}

		}
	}


	function get_album_s($directory, $album=false)
	{
		$raw = get_directory_listing($directory); //remove unix files
		if($raw === -1) //directory error
		{
			return $raw;
		}

		if($album !== false) //single album specified
		{
			if(in_array($album, $raw))
			{
				$directories = $raw[array_search($album,$raw)];
			}
			else
			{
				return -1;
			}
		}
		else
		{
			$directories = array(); //new array
			foreach($raw as $key => $dir) //set array to have the keys and values of the array to use later
			{
				$directories[] = $dir; // output: 'directoryalbum' => 'Directory Album'
			}
		}
		return $directories;
	}

	function get_pictures($directory)
	{

		$raw = get_directory_listing($directory,array('thumbnail.jpg','thumbs'));
		return $raw;
	}

	//Gets listing of directory, removes default unix files (. and ..)
	//
	function get_directory_listing($directory = array(),$remove = array())
	{
		if(file_exists($directory))
		{
			array_push(remove, '..', '.');
			$raw_listing = array_diff(scandir($directory),$remove); //scan directory and remove selected files //array('..', '.', 'thumbnail.jpg')
			if(empty($raw_listing)) //No files in directory
			{
				return -1;
			}
			else
			{
				$listing = array();
				foreach($raw_listing as $key => $data) //shift array to be zero index if files are removed above
				{
					$listing[] = $data;
				}
				return $listing;
			}
		}
		else //Location does not exist
		{
			return -1;
		}
	}

	//Returns all GET variables, while
	//allowing you to remove particular
	//ones as an array of the GET keys
	function get_GET($remove = array())
	{
		foreach($remove as $key => $value)
		{
			$to_remove[$value] = $value; //transfer $removes values into the keys to compare to GET variables properly
		}
		$array = array_diff_key($_GET,$to_remove);

		$string = '';
		foreach($array as $key => $value)
		{
			$string = $string.$key.'='.$value.'&';
			//$string = $string.$key.'/'.$value.'/';
		}
		return substr($string, 0, -1); //cut off last '&' or '/'
	}

	function gen_pagination($num_pages, $curr_page, $num_shown = 10)
	{
		echo '<nav>';
			echo '<ul class="pagination">';
				echo '<li class="'.(($curr_page <= 1)? 'disabled' : '').'">';
					echo '<a class="btn-previous" href="'.(($curr_page <= 1)? '#' : ('./index.php?'.get_GET(array('page')).'&page='.($curr_page-1))).'" aria-label="Previous">';
						echo '<span aria-hidden="true">&laquo;</span>';
					echo '</a>';
				echo '</li>';

				$start = $curr_page - ceil($num_shown*0.7); //TODO: should probably find better numbers
				$end = $curr_page + ceil($num_shown*0.2); //that won't only work well for 10
				if($start < 1)
				{
					$end += $start*(-1)+1;
					$start = 1;
				}
				if($end > $num_pages)
				{
					$start -= $end - $num_pages;
					$end = $num_pages;
				}

				//Handle if $num_pages is less than $num_shown
				if($start < 1)
				{
					$start = 1;
				}
				if($end > $num_pages)
				{
					$end = $num_pages;
				}

				for($i = $start; $i <= $end; $i++)
				{
					echo '<li class="'.(($i == $curr_page)? 'active': '').'">';
					echo '<a href="./index.php?'.get_GET(array('page')).'&page='.($i).'">';
						echo str_pad($i, 2, '0', STR_PAD_LEFT);
					echo '</a>';
					echo '</li>';
				}
				echo '<li class="'.(($curr_page >= $num_pages)? 'disabled' : '').'">';
					echo '<a class="btn-next" href="'.(($curr_page >= $num_pages)? '#' : ('./index.php?'.get_GET(array('page')).'&page='.($curr_page+1))).'" aria-label="Next">';
						echo '<span aria-hidden="true">&raquo;</span>';
					echo '</a>';
				echo '</li>';
			echo '</ul>';
		echo '</nav>';
	}
?>
