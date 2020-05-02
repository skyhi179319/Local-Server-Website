$( function() {
    $( "#dialog" ).dialog({
        width: 700,
        height: 500
    });
} );
showSlides();

function showSlides() {
    $("#ImportResults1").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Set.php");
    $("#ImportResults2").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Set.php");
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}