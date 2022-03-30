/*
  Joey S. 
  File name: script.js
  Current date: 03/30/2022
*/


//Global variables
var video = document.getElementById("example");
var videoSource = document.getElementById("vid-src");
var descriptionSource = document.getElementById("despsrc");

//mobile navigation menu

function sandwich() {
  var menu = document.getElementById("menulinks")
  if (menu.style.display === "block") {
     menu.style.display = "none";
  } else {
      menu.style.display = "block";
  }
}

//Slideshow for Homepage
var imagePaths = [
  "images/lagoon.jpg", "images/omega.jpg", "images/carina.jpg", "images/rosette.jpg", "images/crab.jpg", "images/horsehead.jpg"
];
var showCanvas = null;
var showCanvasCtx = null;
var img = document.createElement("img");
var currentImage = 0;
var revealTimer;
var gAlpha = 0.1;
var now = null;
var FADE_DELAY = 20; // ms to delay for each alpha increment
var IMAGE_DELAY = 3000; // ms to show each image for

function init() {
  // get a reference to the canvas and drawing context
  showCanvas = document.getElementById('showCanvas');
  showCanvasCtx = showCanvas.getContext('2d');

  // set the width and height of the img element to match image dimensions
  img.setAttribute('width', '600');
  img.setAttribute('height', '450');

  // show the initial image
  switchImage();

  // start the animation
  setInterval(switchImage, IMAGE_DELAY);
}

function switchImage() {
  // get the next image in the array
  img.setAttribute('src', imagePaths[currentImage++]);
  if (currentImage >= imagePaths.length)
    currentImage = 0;

  // reset the global alpha and slowly ramp it up
  gAlpha = 0.0;
  requestAnimationFrame(revealImage);
}

function revealImage(timestamp) {
  // TODO: create the smooth animation transition
  if (!now)
    now = timestamp;

  if((timestamp - now) > FADE_DELAY) {
    gAlpha += 0.01;
    showCanvasCtx.globalAlpha = gAlpha;
    showCanvasCtx.drawImage(img,0,0,600,450);
    now = timestamp;
  }
  if (gAlpha < 1.0)
    requestAnimationFrame(revealImage);
}

//Function to display the burpees example video
function burpees() {
  videoSource.src = "media/burpees.mp4";
  descriptionSource.src = "media/burpees-descriptions.vtt";
  video.style.display = "block";
  video.load();
}
