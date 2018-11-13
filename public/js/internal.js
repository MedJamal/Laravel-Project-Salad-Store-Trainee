function loadscroler(){
	
}
$(document).on('ready',function(){ 
	"use strict";
	loadscroler();
	
		
	/*slideshow script code start here*/
	$('.slideshow').owlCarousel({
		items: 1,
		autoPlay: 5000,
		singleItem: true,
		navigation: true,
		navigationText: ['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
		pagination: false,
	});
	/*slideshow script code end here*/
	
	/*slideshow1 script code start here*/
	$('.slideshow1').owlCarousel({
		items: 1,
		autoPlay: 5000,
		singleItem: true,
		navigation: true,
		navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		pagination: true,
	});
	/*slideshow1 script code end here*/
	
	/*slideshow2 script code start here*/
	$('.slideshow2').owlCarousel({
		items: 1,
		autoPlay: 5000,
		singleItem: true,
		navigation: false,
		navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		pagination: false,
	});
	/*slideshow2 script code end here*/
	
	/*deal script code start here*/
	$('.deal').owlCarousel({
		items: 2,
		itemsDesktop : [1199, 2],
		itemsDesktopSmall : [979, 1],
		itemsTablet : [768, 1],
		itemsMobile : [479, 1],
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : false,
		navigationText: ['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
		pagination: false,
	});
	/*deal script code end here*/
	
	/*vegetables script code start here*/
	$('.vegetables').owlCarousel({
		items: 2,
		itemsDesktop : [1199, 2],
		itemsDesktopSmall : [979, 1],
		itemsTablet : [768, 1],
		itemsMobile : [479, 1],
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : false,
		navigationText: ['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
		pagination: false,
	});
	/*vegetables script code end here*/
	
	/*fruits script code start here*/
	$('.fruits').owlCarousel({
		items: 2,
		itemsDesktop : [1199, 2],
		itemsDesktopSmall : [979, 1],
		itemsTablet : [768, 1],
		itemsMobile : [479, 1],
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : false,
		navigationText: ['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
		pagination: false,
	});
	/*fruits script code end here*/
	
	/*testimonail script code start here*/
	$('.testimonail').owlCarousel({
		items: 1,
		itemsDesktop : [1199, 1],
		itemsDesktopSmall : [979, 1],
		itemsTablet : [768, 1],
		itemsMobile : [479, 1],
		navigation : true,
		slideSpeed : 300,
		autoPlay: false,
		paginationSpeed : 400,
		singleItem : false,
		navigationText: ['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
		pagination: false,
	});
	/*testimonail script code end here*/
	
	/*testimonail1 script code start here*/
	$('.testimonail1').owlCarousel({
		items: 2,
		itemsDesktop : [1199, 1],
		itemsDesktopSmall : [979, 1],
		itemsTablet : [768, 1],
		itemsMobile : [479, 1],
		navigation : true,
		slideSpeed : 300,
		autoPlay: false,
		paginationSpeed : 400,
		singleItem : false,
		navigationText: ['<i class="fa fa-long-arrow-left fa1"></i>', '<i class="fa fa-long-arrow-right fa2"></i>'],
		pagination: false,
	});
	/*testimonail1 script code end here*/
		
	/*testimonail3 script code start here*/
	$('.testimonail3').owlCarousel({
		items: 1,
		itemsDesktop : [1199, 1],
		itemsDesktopSmall : [979, 1],
		itemsTablet : [768, 1],
		itemsMobile : [479, 1],
		navigation : true,
		slideSpeed : 300,
		autoPlay: false,
		paginationSpeed : 400,
		singleItem : false,
		navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		pagination: false,
	});
	/*testimonail3 script code end here*/
	
	/*testimonail4 script code start here*/
	$('.testimonail4').owlCarousel({
		items: 2,
		itemsDesktop : [1199, 2],
		itemsDesktopSmall : [979, 2],
		itemsTablet : [768, 1],
		itemsMobile : [479, 1],
		navigation : false,
		slideSpeed : 300,
		autoPlay: false,
		paginationSpeed : 400,
		singleItem : false,
		navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		pagination: false,
	});
	/*testimonail4 script code end here*/
		
	/*abtestimonail script code start here*/
	$('.abtestimonail').owlCarousel({
		items: 2,
		itemsDesktop : [1199, 2],
		itemsDesktopSmall : [979, 2],
		itemsTablet : [768, 1],
		itemsMobile : [479, 1],
		navigation : false,
		slideSpeed : 300,
		autoPlay: false,
		paginationSpeed : 400,
		singleItem : false,
		navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		pagination: false,
	});
	/*abtestimonail script code end here*/
		
	/*carousel10 script code start here*/
	$('#carousel10').owlCarousel({
		items: 5,
		itemsDesktop : [1199, 4],
		itemsDesktopSmall : [979, 3],
		itemsTablet : [768, 2],
		itemsMobile : [479, 1],
		navigation : false,
		slideSpeed : 300,
		autoPlay: false,
		paginationSpeed : 400,
		singleItem : false,
		navigationText: ['<i class="fa fa-angle-left fa1"></i>', '<i class="fa fa-angle-right fa2"></i>'],
		pagination: false,
	});
	/*carousel10 script code end here*/
	
	//quantity code
	$(function () {
		$('.add').on('click',function(){
			var $qty=$(this).closest('p').find('.qty');
			var currentVal = parseInt($qty.val());
				$qty.val(currentVal + 1);
		});
		$('.minus').on('click',function(){
			var $qty=$(this).closest('p').find('.qty');
			var currentVal = parseInt($qty.val());
			$qty.val(currentVal - 1);					
		});
	});	
	
		
	// Product Grid
	$('#grid-view').on('click',function(){
		$('.product-list').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		localStorage.setItem('display', 'grid');
	});
	$('#list-view').on('click',function(){
		$('.product-grid').attr('class', 'product-layout product-list col-xs-12');
		localStorage.setItem('display', 'list');
	});
	
	
	// Product Grid
	$('#grid-view1').on('click',function(){
		$('.product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-4 col-xs-12');
		localStorage.setItem('display', 'grid');
	});
	$('#list-view1').on('click',function(){
		$('.product-grid').attr('class', 'product-layout product-list col-xs-12');
		localStorage.setItem('display', 'list');
	});
	
 
    $(".onhover ul").hide();
		//$(".onhover .icons").show();
		$('.onhover .icons0').on('click',function(){
			$(".onhover0 ul").slideToggle();
			return false;
			});

    $('.onhover .icons1').on('click',function(){
		$(".onhover1 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons2').on('click',function(){
		$(".onhover2 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons3').on('click',function(){
		$(".onhover3 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons4').on('click',function(){
		$(".onhover4 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons5').on('click',function(){
		$(".onhover5 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons6').on('click',function(){
		$(".onhover6 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons7').on('click',function(){
		$(".onhover7 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons8').on('click',function(){
		$(".onhover8 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons9').on('click',function(){
		$(".onhover9 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons10').on('click',function(){
		$(".onhover10 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons11').on('click',function(){
		$(".onhover11 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons12').on('click',function(){
		$(".onhover12 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons13').on('click',function(){
		$(".onhover13 ul").slideToggle();
		return false;
    });
		
	$('.onhover .icons14').on('click',function(){
		$(".onhover14 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons15').on('click',function(){
		$(".onhover15 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons16').on('click',function(){
		$(".onhover16 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons17').on('click',function(){
		$(".onhover17 ul").slideToggle();
		return false;
    });
	
	
	$('.onhover .icons18').on('click',function(){
		$(".onhover18 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons19').on('click',function(){
		$(".onhover19 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons20').on('click',function(){
		$(".onhover20 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons21').on('click',function(){
		$(".onhover21 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons22').on('click',function(){
		$(".onhover22 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons23').on('click',function(){
		$(".onhover23 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons24').on('click',function(){
		$(".onhover24 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons25').on('click',function(){
		$(".onhover25 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons26').on('click',function(){
		$(".onhover26 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons27').on('click',function(){
		$(".onhover27 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons28').on('click',function(){
		$(".onhover28 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons29').on('click',function(){
		$(".onhover29 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons30').on('click',function(){
		$(".onhover30 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons31').on('click',function(){
		$(".onhover31 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons32').on('click',function(){
		$(".onhover32 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons33').on('click',function(){
		$(".onhover33 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons34').on('click',function(){
		$(".onhover34 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons35').on('click',function(){
		$(".onhover35 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons36').on('click',function(){
		$(".onhover36 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons37').on('click',function(){
		$(".onhover37 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons38').on('click',function(){
		$(".onhover38 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons39').on('click',function(){
		$(".onhover39 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons40').on('click',function(){
		$(".onhover40 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons41').on('click',function(){
		$(".onhover41 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons42').on('click',function(){
		$(".onhover42 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons43').on('click',function(){
		$(".onhover43 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons44').on('click',function(){
		$(".onhover44 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons45').on('click',function(){
		$(".onhover45 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons46').on('click',function(){
		$(".onhover46 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons47').on('click',function(){
		$(".onhover47 ul").slideToggle();
		return false;
    });
	
	
	$('.onhover .icons48').on('click',function(){
		$(".onhover48 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons49').on('click',function(){
		$(".onhover49 ul").slideToggle();
		return false;
    });
	
	$('.onhover .icons49').on('click',function(){
		$(".onhover49 ul").slideToggle();
		return false;
    });
	
	/* 
    $(".onhover1 .button-group .btn-icon")();
    $(".onhover1 .icons").show();
    $('.onhover1 .icons').on('click',function(){
		$(".onhover1 .button-group .btn-icon").slideToggle();
		return false;
    }); */
				
});


