<?php get_header(); ?>

<section class="container">

<h2>Latest News</h2>

<?php
if(have_posts()):
while(have_posts()): the_post();
?>

<h3><?php the_title(); ?></h3>
<?php the_excerpt(); ?>

<?php
endwhile;
endif;
?>

</section>

<?php get_footer(); ?>