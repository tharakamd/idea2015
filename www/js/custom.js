$(document).ready(function() {
    
	$("#transition").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(1000, redirectPage);		
	});
	$("#transition2").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(1000, redirectPage);		
	});
	$("#transition3").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(800, redirectPage);		
	});
	$("#transition4").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(800, redirectPage);		
	});
	$("#transition5").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(800, redirectPage);		
	});
	$("#transition6").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(800, redirectPage);		
	});
		
	function redirectPage() {
		window.location = linkLocation;
	}
	
});
