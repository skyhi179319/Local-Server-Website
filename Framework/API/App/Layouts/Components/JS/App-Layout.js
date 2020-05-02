$(function(){
    $( "#menu2" ).menu();
});
$( "#menu2" ).after(function() {
	$("#ImportColorBreak2").load("http://127.0.0.0/Local-Server-Website/Framework/API/Components/Elements/ColorBreak/ColorBreak.php");
});
$("#LoadLayoutScripts").click(function(){
		$("#LoadContent").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/Developer/Layout-Scripts/Page.php");
});
$("#LoadAboutModalInfo").click(function(){
		$("#LoadContent").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/Developer/About-Modal/Page.php");
});
$("#LoadDeveloperModal").click(function(){
		$("#LoadContent").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Modals/Developer/Modal.php");
});
$("#LoadAXCAll").click(function(){
		$("#LoadContent").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/Developer/AXC-All/Page.php");
});
$("#LoadSPAll").click(function(){
		$("#LoadContent").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/Developer/SP-All/Page.php");
});
$("#LoadAllComponentsInfo").click(function(){
		$("#LoadContent").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/Developer/Components-All/Page.php");
});