<?php
/*
Template Name: Booking
*/
get_header();
?>

<section class="section">

<div class="container">

<h1 class="section-title">Book Your Stay</h1>

<form class="booking-form">

<input type="text" placeholder="Full Name" required>

<input type="email" placeholder="Email" required>

<label>Check In</label>
<input type="date" required>

<label>Check Out</label>
<input type="date" required>

<input type="number" placeholder="Guests">

<button class="btn">Reserve Room</button>

</form>

</div>

</section>

<?php get_footer(); ?>