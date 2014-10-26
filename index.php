<?php
include_once("./files/functions.php");
include_once("./navigation.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Tiger Robotics | FIRST FRC3946</title>
		
		<link rel="shortcut icon" type="image/x-icon" href="./files/favicon.gif" />
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="./bootstrap/css/magic-bootstrap-min.css" />
		<link rel="stylesheet" href="./files/styles.css" />
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	</head>
	<body>
		<div id="head" class="container" role="header">
			<div class="row">
				<div class="col-xs-4 col-sm-3 text-center">
					<a class="" href="./"><img src="./files/logo.png" /></a>
				</div>
				<div class="col-xs-8 col-sm-9">
					<div class="row">
						<div class="responsive-text-high col-xs-12 text-left">
							FRC Team 3946
						</div>
					</div>
					<div class="row">
						<div id="name" class="responsive-text col-xs-12 text-center">
							Tiger Robotics
						</div>
					</div>
					<div class="row">
						<div class="responsive-text-high col-xs-12 text-right">
							Slidell High. Slidell, LA
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<div class="sr-only">Toggle Navigation</div>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
<?php display_nav($links); echo "\n"; ?>
					</ul>
				</div>
			</div>
		</div>



		<div class="container" role="main">
		<?php
		if(!(isset($_GET['p'])))
		{
			$_GET['p'] = 'home';
		}

		if(file_exists('./pages/'.$_GET['p'].'.php'))
		{
include "./pages/".$_GET['p'].".php";
		}
		else
		{
			echo '<div class="alert alert-danger"><h1>Page not Found!</h1></div>';
		}
		echo "\n";
		?>
		</div>


		<!--FOOTER-->
		<footer>
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-6">
							<a href="http://www.usfirst.org"><img src="./files/firstLogo.png" /></a>
						</div>
						<div class="col-sm-9 col-xs-6">
							<div class="row">
								<?php
									$social_media = array
									(
										'facebook' => 'https://www.facebook.com/TigerRobotics3946',
										'twitter' => 'https://twitter.com/#!/slidellrobotics',
										'googleplus' => 'https://plus.google.com/118198635080612986989/posts',
										'youtube' => 'https://www.youtube.com/user/slidellrobotics'
									);
									foreach($social_media as $picture => $url)
									{
										echo '<div class="text-center col-sm-2 col-md-1">';
										echo '<a href="'.$url.'"><img src="./files/social/'.$picture.'.png" /></a>';
										echo '</div>';
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>




		<script src="./bootstrap/js/jquery.min.js"></script>
		<script src="./bootstrap/js/bootstrap.min.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="./files/jquery.fittext.js"></script>
		<script src="./files/javascript.js"></script>
	</body>
</html>
