function openModal(room){

let modal = document.getElementById("roomModal");
let img = document.getElementById("modalImage");

let path = "";

if(room === "room1"){
path = themePath + "/assets/images/room1.jpg";
}

if(room === "room2"){
path = themePath + "/assets/images/room2.jpg";
}

if(room === "room3"){
path = themePath + "/assets/images/room3.jpg";
}

img.src = path;
modal.style.display = "block";
}

function closeModal(){
document.getElementById("roomModal").style.display = "none";
}