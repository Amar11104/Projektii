<?php get_header(); ?>

<section class="container">

<?php if(have_posts()) : ?>

<?php while(have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php the_post_thumbnail(); ?>

<p><?php the_content(); ?></p>

<?php endwhile; ?>

<?php endif; ?>

</section>

<?php get_footer(); ?>