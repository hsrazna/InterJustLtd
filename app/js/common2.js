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

	$('.az-carousel').owlCarousel({
		items: 1,
		dots: true,
		margin: 10
	});

	$('.az-select').selectpicker({
	  style: 'btn-info',
	  size: 4
	});

	// jQuery("#az-slider").slider({
	// 	min: parseInt($("input#minDist").val()),
	// 	max: parseInt($("input#maxDist").val()),
	// 	values: [parseInt($("input#startDist").val()),parseInt($("input#endDist").val())],
	// 	range: true,
	//     stop: function(event, ui) {
	// 		jQuery("input#startDist").val(jQuery("#az-slider").slider("values",0)+" км.");
	// 		jQuery("input#endDist").val(jQuery("#az-slider").slider("values",1)+" км.");
	// 	},
	// 	slide: function(event, ui){
	// 		jQuery("input#startDist").val(jQuery("#az-slider").slider("values",0)+" км.");
	// 		jQuery("input#endDist").val(jQuery("#az-slider").slider("values",1)+" км.");
	// 	}
	// }).draggable();

});
