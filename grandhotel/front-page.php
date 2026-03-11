<?php get_header(); ?>

<div class="hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg')">

Luxury Hotel

</div>

<section class="container">

<h2>Our Rooms</h2>

<div class="rooms-grid">

<?php

$query = new WP_Query(array(
'post_type'=>'rooms',
'posts_per_page'=>3
));

while($query->have_posts()){

$query->the_post();

?>

<div class="room-card">

<?php the_post_thumbnail(); ?>

<h3><?php the_title();?></h3>

<?php the_excerpt();?>

<a href="<?php the_permalink();?>">View Room</a>

</div>

<?php }

wp_reset_postdata();

?>

</div>

</section>

<?php get_footer(); ?>