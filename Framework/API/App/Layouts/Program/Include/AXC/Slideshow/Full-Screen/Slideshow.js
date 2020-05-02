showSlides();
function showSlides() {
  $("#ImportResults").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/Slideshow/Set.php");
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}