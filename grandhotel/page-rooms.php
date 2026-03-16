<?php
/* Template Name: Rooms */
get_header();
?>

<section class="container rooms-section">

<h1><?php the_title(); ?></h1>

<div class="rooms-grid">

<!-- ROOM 1 -->
<div class="room-card">
    <img src="<?php echo get_template_directory_uri(); ?>/images/room1.jpg" alt="Deluxe Room">
    
    <div class="room-info">
        <h3>Deluxe Room</h3>
        <p>Spacious deluxe room with king bed, balcony and city view.</p>
        <button onclick="openModal('room1')">View Room</button>
    </div>
</div>

<!-- ROOM 2 -->
<div class="room-card">
    <img src="<?php echo get_template_directory_uri(); ?>/images/room2.jpg" alt="Luxury Suite">
    
    <div class="room-info">
        <h3>Luxury Suite</h3>
        <p>Luxury suite with living room, premium interior and sea view.</p>
        <button onclick="openModal('room2')">View Room</button>
    </div>
</div>

<!-- ROOM 3 -->
<div class="room-card">
    <img src="<?php echo get_template_directory_uri(); ?>/images/room3.jpg" alt="Family Room">
    
    <div class="room-info">
        <h3>Family Room</h3>
        <p>Perfect for families, large beds and comfortable seating area.</p>
        <button onclick="openModal('room3')">View Room</button>
    </div>
</div>

</div>

</section>


<!-- MODAL -->
<div id="roomModal" class="room-modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img id="modalImage">
</div>

<?php get_footer(); ?>