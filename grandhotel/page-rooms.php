<?php
/* Template Name: Rooms */
get_header();
?>

<section class="container">

<h1>Rooms</h1>

<div class="rooms-grid">

<?php

$query = new WP_Query(array(
'post_type' => 'rooms'
));

while($query->have_posts()) {

$query->the_post();

?>

<div class="room-card">

<?php the_post_thumbnail(); ?>

<h3><?php the_title(); ?></h3>

<?php the_excerpt(); ?>

<a href="<?php the_permalink(); ?>">View Room</a>

</div>

<?php }

wp_reset_postdata();

?>

</div>

</section>

<?php get_footer(); ?>