function playVideo() {
  var video = document.getElementById("banner-video");
  var image = document.getElementById("banner-image");
  var playIcon = document.querySelector(".play-icon");

  // Hide the image and play icon
  image.style.display = "none";
  playIcon.style.display = "none";

  // Show the video and start playing it
  video.style.display = "block";
  video.play();
}
