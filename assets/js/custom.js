(function($){
$(document).ready(function() {
	"use strict";
    
/*==================================
    * Author        : "HelloXpert"
    * Template Name : ThemX | HTML Template
    * Version       : 1.0
==================================== */
    
/*=========== TABLE OF CONTENTS ===========

	01. Sticky Header
	02. Hamburger Menu Icon
	03. Scroll To Top
	04. Preloader
	05. Smooth Scroll
	06. Home Default Masonry
	07. Portfolio Masonry One
	08. Portfolio Masonry Two
	09. Portfolio Masonry Three
	10. Home architecure Masonry 
	11. Home Minimal Masonry
	12. Start-Up Home Masonry
	13. One Page Portfolio Masonry
	14. Default Home  Slider
	15. Digital Home  slider
	16. Architecture Home  slider
	17. Creative Home  slider
	18. Minimal Home  slider
	19. Resume Home  slider
	20. Start-Up Home slider
	21. Onepage Revulation Slider
	22. Master Slider StartUp Home Team
	23. Scroll ProgreesBar
	24. Testimonial Digital Active
	25. Digital Client Active
	26. Testimonial Home Default
	27. About us page Carosel
	28. architecture Home Testimonial
	29. Home Architecture Client 
	30. Testimonial Crative Home
	31. Testimonial Minimal Home
	32. Testimonial Resume Home
	33. Home Star-Up Client / Home Resume Client 
	34. Testimonial Start-Up Home
	35. Shop single slider active
	36. Onepage Client Say
	37. MixItUp JS Active
	38. Wow JS Active
	39. Counter Up
	40. Gmaps
	41. Gmaps Active Onepage
	42. Ripples Effect
	43. Shop filter Js Active
	44. Quantity Buttons Shop
	45. Portfolio Single Page

======================================*/

    /*--------------------------------
	 	01. Sticky Header
	---------------------------------*/ 
	if ($(".navbar").length) {
    	var options = {
	        offset: 350,
	        offsetSide: 'top',
	        classes: {
	            clone: 'banner--clone fixed',
	            stick: 'banner--stick',
	            unstick: 'banner--unstick'
	        },
	        onStick: function() {
	            $($.SmartMenus.Bootstrap.init);
	        },
	        onUnstick: function() {
	            $('.navbar .btn-group').removeClass('open');
	        }
	    };
	    var banner = new Headhesive('.navbar', options);
	}

    /*--------------------------------
	 	02. Hamburger Menu Icon
	---------------------------------*/ 
    $(".nav-bars").on( "click", function() {
        $(".nav-bars").toggleClass("is-active");
    });

	/*--------------------------------
	 	03. Scroll To Top
	---------------------------------*/ 
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

	/*--------------------------------
	 	04. Preloader
	---------------------------------*/
    $(window).on('load',function() {
		$("#spinningSquaresG1").delay(1000).fadeOut(500);
		$(".inTurnBlurringTextG").on('click',function() {
			$("#spinningSquaresG1").fadeOut(500);
		});
	});
	
	/*--------------------------------
	 	05. Smooth Scroll
	---------------------------------*/
    $('a.data-scroll').on("click", function(e) {
        e.preventDefault();
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 80
        }, 1500);
    });


	/*----------------------------
		15. Digital Home  slider
	------------------------------ */
	var Home_digital=jQuery;
	var revapi_digital;
	if(Home_digital("#digital_rev_slider").revolution == undefined){
		revslider_showDoubleJqueryError("#digital_rev_slider");
	}else{
		revapi_digital = Home_digital("#digital_rev_slider").show().revolution({
			sliderType:"standard",
	jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:4000,
            navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 50,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:true,
					hide_under:778,
					hide_onleave:true,
					hide_delay:200,
					hide_delay_mobile:1200,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1600,1024,778,480],
			gridheight:[900,600,500,400],
			lazyType:"none",
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}

	/*---------------------------------------
		22. Master Slider StartUp Home Team
	----------------------------------------- */
	var slider = new MasterSlider();
	slider.setup('masterslider' , {
		loop:true,
		width:240,
		height:240,
		speed:20,
		view:'stf',
		space:0,
		wheel:true
	});
	slider.control('arrows');
	slider.control('slideinfo',{insertTo:'#staff-info'});

	/*----------------------------
		23. Scroll ProgreesBar
	------------------------------ */
	$(window).on("scroll", function() {
        $(".progress-main .progress-bar").each(function() {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            var myVal = $(this).attr("data-value");
            if (bottom_of_window > bottom_of_object) {
                $(this).css({
                    width: myVal
                })
            }
        })
	});

	/*----------------------------
		24. Testimonial Digital Active
	------------------------------ */
	$(".testimonial_digital").owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        dots:true,
        mouseDrag:false,
        nav: true,
		navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		transitionStyle:"fade",
        animateIn: 'fadeIn',
        animateOut: 'fadeOutLeft',
        smartSpeed: 1000
	});

	/*--------------------------------
	 	25. Digital Client Active
	---------------------------------*/  
    $('.single_a_me_list').owlCarousel({
        items: 4,
        loop: true,
        margin:133,
        mouseDrag:true,
        dots:false,
        nav: false,
        smartSpeed: 1000,
        autoplay: true,
        responsive:{
				0:{
					items:2
				},
				600:{
					items:2
				},
				700:{
					items:3
				},
				800:{
					items:4
				},
				1024:{
					items:4
				},
				1200:{
					items:4
				}
			}
		});


	/*----------------------------
		27. About us page Carosel
	------------------------------ */
	$(".section_themex_right_active").owlCarousel({
		items: 1,
		autoplay: true,
		loop: true,
		dots:true,
		mouseDrag:true,
		smartSpeed: 1000,
    });


/*--------------------------------
   05. Home Default Masonry Three
 ---------------------------------*/
	 $('.home_default_masonery_menu_menu .title').on('click', function(){
	  $(this).toggleClass('active').next('.toggle').slideToggle();
	  return false;
	 });
	 $(window).on('load', function(){
	  if($('.full_width_masonery-container').length){
	   var $container = $('.full_width_masonery-container').isotope({
		   itemSelector: '.full_width_masonery-item',
		   masonry: {
			   columnWidth: '.full_width_masonery-sizer'
		   }
	   });
	   $('.home_default_masonery_menu_menu a').on('click', function() {
			  if($(this).hasClass('active')) return false;
			  $(this).parent().find('.active').removeClass('active');
			  $(this).addClass('active');
			  $(this).closest('.home_default_masonery_menu_menu').find('.title').text($(this).find('.text').text());
			  if($(this).closest('.home_default_masonery_menu_menu').find('.title').is(':visible')) $(this).closest('.home_default_masonery_menu_menu').find('.toggle').slideUp();
			  var filterValue = $(this).attr('data-filter');
			 $container.isotope({ filter: filterValue });
		  });
	  }
	 });

	/*----------------------------
		38. Wow JS Active
	------------------------------ */  
	new WOW().init();

	/*----------------------------
		39. Counter Up
	------------------------------ */ 
    $('.counter').counterUp({
        delay: 10,
        time: 5000
    });

    /*----------------------------
		40. Gmaps
	------------------------------*/
	var map;
	$('.ev-map-display').each(function() {
		var element = $(this).attr('id');
		map = new GMaps({
		el: '#' + element,
		center: new google.maps.LatLng(23.6788817,88.1000581),
		zoom:5,
		scrollwheel: false,
		styles: [
				{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#222"
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#555"
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#333333"
						},
						{
							"lightness": 17
						}
					]
				},
				{
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#fefefe"
						},
						{
							"lightness": 29
						},
						{
							"weight": 0.2
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#333333"
						},
						{
							"lightness": 18
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#333333"
						},
						{
							"lightness": 16
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#ccc"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#dedede"
						},
						{
							"lightness": 21
						}
					]
				},
				{
					"elementType": "labels.text.stroke",
					"stylers": [
						{
							"visibility": "on"
						},
						{
							"color": "#333"
						},
						{
							"lightness": 6
						}
					]
				},
				{
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"saturation": 36
						},
						{
							"color": "#333333"
						},
						{
							"lightness": 40
						}
					]
				},
				{
					"elementType": "labels.icon",
					"stylers": [
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "geometry",
					"stylers": [
						{
							"color": "#f2f2f2"
						},
						{
							"lightness": 19
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.fill",
					"stylers": [
						{
							"color": "#000"
						},
						{
							"lightness": 0
						}
					]
				},
				{
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [
						{
							"color": "#000"
						},
						{
							"lightness": 0
						},
						{
							"weight": 1.2
						}
					]
				}
			]
		});
	});



    /*----------------------------
		42. Ripples Effect
	------------------------------ */
	if (typeof $.fn.ripples == 'function') {
        try {
            $('.ripple').ripples({
                resolution: 500,
                perturbance: 0.04
            });
        } catch (e) {
            $('.error').show().text(e);
        }
    }
});
})(jQuery)