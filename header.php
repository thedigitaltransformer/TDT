<!DOCTYPE html>
<html <?php language_attributes();  ?> >
<head>

	<meta charset="<?php bloginfo('charset');?>" >
	<meta name="description" content=" <?php bloginfo('description'); ?>">
	<title><?php bloginfo('name');?> - <?php is_front_page() ? bloginfo('description') : wp_title(); ?> </title>
    <!--Import Google Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" media="screen,projector">
    <!-- Style CSS custom -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen,projector">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php wp_head(); ?>
</head>

<body>

    <header>
       <div class="row">
			<div class="col s9">
				<a href="<?php echo get_site_url(); ?>">
					<img class="image-responsive logo" src="<?php bloginfo('template_url') ?>/assets/img/logo.png"/>
				</a>
			</div>
      		<div class="col s3 noir">
      			<p class="right-align"><a href="/blog">TEST - BLOG</a></p>
      		</div>
       </div>
    </header>
