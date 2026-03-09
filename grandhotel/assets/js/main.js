// Wait until page loads
document.addEventListener("DOMContentLoaded", function () {


// ----------------------
// Mobile Menu Toggle
// ----------------------

const menuBtn = document.createElement("button");
menuBtn.innerHTML = "☰";
menuBtn.classList.add("menu-toggle");

const nav = document.querySelector("nav");

if(nav){
nav.parentElement.insertBefore(menuBtn, nav);

menuBtn.addEventListener("click", function(){
nav.classList.toggle("active");
});
}


// ----------------------
// Smooth Scroll
// ----------------------

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

anchor.addEventListener("click", function(e){

e.preventDefault();

document.querySelector(this.getAttribute("href"))
.scrollIntoView({
behavior:"smooth"
});

});

});


// ----------------------
// Booking Form Validation
// ----------------------

const bookingForm = document.querySelector(".booking-form");

if(bookingForm){

bookingForm.addEventListener("submit", function(e){

const inputs = bookingForm.querySelectorAll("input");

let valid = true;

inputs.forEach(function(input){

if(input.value === ""){
valid = false;
input.style.border = "2px solid red";
}

});

if(!valid){
e.preventDefault();
alert("Please fill in all required fields.");
}

});

}


// ----------------------
// Contact Form Validation
// ----------------------

const contactForm = document.querySelector(".contact-form");

if(contactForm){

contactForm.addEventListener("submit", function(e){

const email = contactForm.querySelector('input[type="email"]');

if(!email.value.includes("@")){

e.preventDefault();
alert("Please enter a valid email");

}

});

}

});