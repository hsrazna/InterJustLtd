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


});
