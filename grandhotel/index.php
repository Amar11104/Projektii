<?php get_header(); ?>

<section class="container">

<h1>Blog</h1>

<?php if(have_posts()): ?>

<?php while(have_posts()): the_post(); ?>

<h2>

<a href="<?php the_permalink();?>">

<?php the_title();?>

</a>

</h2>

<?php the_excerpt();?>

<?php endwhile; ?>

<?php the_posts_pagination(); ?>

<?php endif; ?>

</section>

<?php get_footer(); ?>