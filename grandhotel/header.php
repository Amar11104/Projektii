<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="header">

<div class="container header-flex">

<div class="logo">
<h2><?php bloginfo('name'); ?></h2>
</div>

<nav>

<?php
wp_nav_menu(array(
'theme_location'=>'main_menu',
'container'=>false
));
?>

</nav>

</div>

</header>