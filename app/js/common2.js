$(function() {

	$(window).click(function(){
		$(".az-menu-list").removeClass("on");
	});

	$(".az-menu-icon").click(function(event){
		event.stopPropagation();
		$(".az-menu-list").toggleClass("on");
	});
	
});
