$(function() {

});

$(function() {

	$(window).click(function(){
		$(".az-menu-list").removeClass("on");
		$(".az-menu-list ul").removeClass("on");
	});

	$(".az-menu-icon").click(function(event){
		event.stopPropagation();
		$(".az-menu-list").toggleClass("on");
		if(!$(".az-menu-list").hasClass("on")){
			$(".az-menu-list ul").removeClass("on");
		}
	});

	$(".az-menu-list a").click(function(event){
		event.stopPropagation();
		if($(this).next("ul").length>0){
			$(this).next("ul").toggleClass("on");
		}
	});
	
	$(".az-sidebar-item-head").click(function(){
		if(window.matchMedia( "(max-width: 767px)" ).matches){
			$(this).siblings(".az-sidebar-item-list").slideToggle(300);
		}
	})

});
