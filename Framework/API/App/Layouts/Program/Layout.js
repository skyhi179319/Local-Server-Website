$(document).ready(function(){
	$("#ImportSidePanelMenu").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Components/HTML/SidePanelMenu.php");
	$("#ImportColorBreak").load("http://127.0.0.0/Local-Server-Website/Framework/API/Components/Elements/ColorBreak/ColorBreak.php");
	$("#FullImprovements").load("http://127.0.0.0/Local-Server-Website/Framework/API/Improvements/Side-Menu/Full/Page.php");
	$("#BackgroundButton").click(function(){
		$("#LoadContent").load("http://127.0.0.0/Local-Server-Website/Framework/API/Components/Elements/Background/Year/HTML/Canvas.php");
	});
});