$(document).ready(function(){
	// Add Content
	function AddContent(){
		var CurrentURL = window.location.href;
		// Page Functions
		function HomePage(){
			$(document).ready(function(){
				$("#MobileContent").load("http://127.0.0.0/Local-Server-Website/Framework/Mobile/Home/Home.php")
			}); 
		}
		// Check URLS
        if(CurrentURL == "http://127.0.0.0/Local-Server-Website/Home.php"){
	        HomePage();
        }
        if(CurrentURL == "http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Tables/Table.php"){
			$(document).ready(function(){
				$("#MobileBackButton").css("display","table-cell")
			});
		}
		if(CurrentURL == "http://127.0.0.0/Local-Server-Website/Framework/API/App/Layouts/Program/Include/AXC/HTML/Scoring/Tables/Search-By/Class.php"){
			$(document).ready(function(){
				$("#MobileBackButton").css("display","table-cell");
				$(".MobileClassPage").css("width","400px");
				$(".TableDiv").css("width","378px");
				$(".InputForm").css("width","275px");
			});
		}
	}
    if(window.matchMedia("(max-width: 767px)").matches){
        // The viewport is less than 768 pixels wide
		AddContent();
    }
});