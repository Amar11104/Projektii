<?php
/* Template Name: Gallery */
get_header();
?>

<section class="container gallery-section">

<h1><?php the_title(); ?></h1>

<div class="gallery">

<?php
$images = get_posts(array(
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'post_status' => 'inherit',
    'posts_per_page' => -1,
));
    
foreach($images as $image) {
    $img = wp_get_attachment_image_src($image->ID, 'large');
    ?>

    <a href="<?php echo $img[0]; ?>" data-lightbox="hotel-gallery">
        <img src="<?php echo $img[0]; ?>" alt="">
    </a>

<?php } ?>

</div>

</section>

<?php get_footer(); ?>