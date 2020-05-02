var CurrentURL = window.location.href;
function HomePage(){
	$(document).ready(function(){
		$("#ImportAPI").load("http://127.0.0.0/Local-Server-Website/Framework/API/Home-Page/HTML/Canvas.php");
		$(".API").css("width","255px");
		$(".API").css("height","255px");
	}); 
}
function AboutPage(){
	$(document).ready(function(){
		$("#ImportAPI").load("http://127.0.0.0/Local-Server-Website/Framework/API/About-Page/HTML/Tab.php");
	}); 
}
function AppPage(){
	$(document).ready(function(){
		$("#ImportAPI").load("http://127.0.0.0/Local-Server-Website/Framework/API/App/App.php");
	}); 
}
if(CurrentURL == "http://127.0.0.0/Local-Server-Website/Home.php"){
	HomePage();
}
if(CurrentURL == "http://127.0.0.0/Local-Server-Website/Pages/About.php"){
	AboutPage();
}
if(CurrentURL == "http://127.0.0.0/Local-Server-Website/Pages/App.php"){
	AppPage();
}