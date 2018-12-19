<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title><?php  bloginfo('name'); ?>    <?php  wp_title('|',true);?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 
	<meta name="description" content="">

	 <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" />

	<!-- Estilos css -->
	<link rel="stylesheet" title="style"  type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
	
		
	<!-- Fuentes -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">

	

	<!-- Scripts-->
	

<!-- Cambiar el color por #101116 -->
<meta name="theme-color" content="#090921">

<?php wp_head(); ?>
<script>var $ = jQuery.noConflict();</script>


</head>

<body <?php body_class(); ?>>

	<?php include("includes/nav.php") ?>
