<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!--	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">-->
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body>

<header id="header">
	<nav class="navbar navbar-exam">
		<div class="navbar-header navbar-header-exam">
			<button type="button" class="navbar-toggle collapsed btn-collapsed-exam" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="fa fa-reorder"></span>
			</button>
            <h1 class="brand-logo" >
                <a href="<?php echo home_url();?>">
                    <img src="<?php echo get_theme_mod('logo_image'); ?>" class="img-responsive" alt="logo"/>
                </a>
            </h1>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php
			wp_nav_menu( array(
				'theme_location'=>'Menu1',
				'menu_class'=>'nav navbar-nav navbar-right navbar-exam'
			))
			;?>
		</div>
	</nav>
</header>