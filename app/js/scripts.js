$(function() {


	if($('.ah-slid-partners').length>0){

		$(".ah-slid-partners").owlCarousel({
		    loop:true,
		    margin:30,
		    nav:true,
		    autoplay:false,
		    smartSpeed:1000,
		    autoplayTimeout:2000,
		    navText:['<span class="prev_arrs1"></span>', '<span class="next_arrs1"></span>'],
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }
		});

	}

	if($('ul.ah-contact-list li a').length>0){
	    var tabContainers = $('.tabs-container > div');
	    tabContainers.hide().filter(':first').show();
	 
	    $('ul.ah-contact-list li a').click(function(){
	        tabContainers.hide();
	        tabContainers.filter(this.hash).show();
	        $('ul.ah-contact-list a').parent('li').removeClass('selected');
	        $(this).parent('li').addClass('selected');
	        return false;
	        }).filter(':first').click();
	}


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

	$('.az-carousel').owlCarousel({
		items: 1,
		dots: true,
		margin: 10
	});

	$('.az-selectpicker').selectpicker({
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
