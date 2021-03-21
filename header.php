<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo get_bloginfo('name');?></title>

<link rel="shortcut icon" href="/favicon.ico">
<!-- Stylesheets -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
<?php wp_head()?>

</head>

<div class="container">

<div class="menu">
<div class="menu__logo">
<?php
if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
?>
</div>
</div>