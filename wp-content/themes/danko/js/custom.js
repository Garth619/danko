// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	


	var windowWidth = $(window).width();
	
	
	 /* Modernizr - check if browser supports webp for section_one. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
     Modernizr.on('webp', function (result) {
	    
	    $('#section_one img').each(function () {
	    
				if (result) {
    
					if ($(this).attr('data-webp')) {
          
          	var img = $(this).data('webp');
          
						$(this).attr('src', img);
        	
        	}
        	
        }
  
	 			else {
		 			
		 			if ($(this).attr('data-jpg')) {
          
          	var img = $(this).data('jpg');
          
						$(this).attr('src', img);
        	
        	}
    
    		}
  		
  		});
  		
  		
  		// background images (one time load, does not reflect media queries or window width..yet)
  		
  		if (result) {
	  		
	  		var sectionOne = '#section_one';
	  		
	  		if ($(sectionOne).attr('data-webpbg')) {
		  		
		  		var imgBg = $(sectionOne).data('webpbg');
		  		
		  		$(sectionOne).css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
	  		
	  	}
	  	
	  	
	  	else {
		  	
		  	if ($('#section_one').attr('data-jpgbg')) {
		  		
		  		var imgBg = $('#section_one').data('jpgbg');
		  		
		  		$('#section_one').css('background-image', 'url(' + imgBg + ')');
		  		
	  		}
		  	
	  	}
  		
			// console.log(result);
	
		});
		
		
		
		/* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      $('img').each(function () {
        
        if ($(this).attr('data-src')) {
          
          var img = $(this).data('src');
          
          $(this).attr('src', img);
        
        }
      
      });

      // background images
      
      $('div, section').each(function () {
       
        if ($(this).attr('data-src')) {
          
          var backgroundImg = $(this).data('src');
          
          $(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('images loaded');
    }

    // createWaypoint('section_two', null, null, '100%', loadImages, false);







     /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    //function wistiaLoad() {
     // jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        //console.log('wistia load:', textStatus); // Success
     // });
   // }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)
    
    
    $('.wistia_embed').click(function () {
        //make sure to only load if Wistia is not already loaded
        if (typeof Wistia === 'undefined') {
            $.getScript("https://fast.wistia.com/assets/external/E-v1.js", function (data, textStatus, jqxhr) {
                // We got the text but, it's possible parsing could take some time on slower devices. Unfortunately, js parsing does not have
                // a hook we can listen for. So we need to set an interval to check when it's ready 
                var interval = setInterval(function () {
                    if ($('.wistia_embed').attr('id') && window._wq) {
                        var videoId = $('.wistia_embed').attr('id').split('-')[1];
                        window._wq = window._wq || [];
                        _wq.push({
                            id: videoId,
                            onReady: function (video) {
                                $('.wistia_click_to_play').trigger('click');
                            }
                        });
                        clearInterval(interval);
                    }
                }, 100)
            });
        }
    })
   
    
    
    
    
    



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		/* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }
		
		
		

    createWaypoint('section_one', 'header', 'visible', 89, null, true);
    createWaypoint('section_one', '#section_one', 'visible', 89, null, true);
    
    createWaypoint('section_three', '.dm_sec_three', 'visible', '40%', null, true);
    createWaypoint('section_four', '.dm_sec_three', 'hide', '70%', null, true);
    
    
    
    createWaypoint('section_four', '.dm_sec_four', 'visible', '40%', null, true);
    createWaypoint('section_five', '.dm_sec_four', 'hide', '80%', null, true);
    
    
    
    createWaypoint('section_five', '.dm_sec_five', 'visible', '40%', null, true);
    createWaypoint('footer_trigger', '.dm_sec_five', 'hide', '80%', null, true);
    
    
    createWaypoint('outer_trigger', '.dm_internal', 'visible', '40%', null, true);
    createWaypoint('footer_trigger', '.dm_internal', 'hide', '80%', null, true);
    
    
    createWaypoint('internal_main', 'header', 'visible', 89, null, true);
    createWaypoint('internal_main', '#internal_main', 'visible', 89, null, true);
    
    
   
		

		
		/* Live Chat - Call function when script needs to be loaded either by hover, click or waypoints
   --------------------------------------------------------------------------------------------------- */ 
   
   
   
   function livechatLoad() {
	   if(my_data.live_chat) {
      jQuery.getScript(my_data.live_chat, function(data, textStatus, jqxhr) {
        console.log('Live Chat load:', textStatus); // Success
      });
      // alert( my_data.live_chat);
      }
    }
   
   
   // createWaypoint('section_one', null, null, -100, livechatLoad, false);
   // createWaypoint('internal_trigger', null, null, -100, livechatLoad, false);




        
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */



$('.sec_two_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade:true,
  adaptiveHeight: true,
	arrows:false,
	mobileFirst:true,
	dots:true,
	responsive: [
    {
      breakpoint: 1225,
      settings: "unslick",
   }
	]
 });
 
 
 
 
 $('.news_feed').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade:true,
  adaptiveHeight: true,
	arrows:false,
	mobileFirst:true,
	dots:true,
	responsive: [
    {
      breakpoint: 767,
      settings: "unslick",
   }
	]
 });
 

 

	

/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");



// dekstop nav



	



	function checkWidthcase() {
    
    if (windowWidth > 1510) {
        
      
    $('nav').addClass('desktop');
    	   		
    		
    } 
    
    
    if (windowWidth <= 1510 && windowWidth > 1175) {
        
      
    		$('nav').addClass('laptop');
    		
    		
    		$('.nav_inner ul.menu > li.menu-item-has-children > a').on('click', function(e) {
    		  
    			$('.nav_inner ul.menu > li.menu-item-has-children > a').removeClass('active');
    			
    			$(this).addClass('active');
    			
    			$('.laptop_sub_nav').empty();
	  
				$(this).next('ul.sub-menu').clone().appendTo('.laptop_sub_nav').fadeIn();
				
			
			});
			
			
			
			$('.menu_wrapper_inner').on('click', function(e) {
			  
				$('.header_middle, .menu_close, .nav_inner, .laptop_form').addClass('open');
				
				$('body').addClass('fixed');
				
			});
			
			
			$('.menu_close').on('click', function(e) {
				
				$(this).removeClass('open');
				
				$('body').removeClass('fixed');
				
				$('.nav_inner, .laptop_form').addClass('close');
				
				
				$('.header_middle').delay(1200).queue(function(){
     
					$('.nav_inner, .laptop_form').removeClass('open close').dequeue();
					
					$(this).removeClass('open').dequeue();
				
				
			});
				
			  
			});
    	   		
    		
    }
    
   };
   
   
    if (windowWidth <= 1175) {
	    
	    $('nav').addClass('tablet');
	    
	    
	    $('.menu_wrapper_inner').on('click', function(e) {
	      
	    		$('.header_middle').slideDown(350);
	    		
	    		$('.menu_close').addClass('open');
	    
	    });
	    
	    
	    $('.nav_inner ul.menu > li.menu-item-has-children > a').on('click', function(e) {
    		  
    			$('.nav_inner ul.menu > li.menu-item-has-children > a').removeClass('active');
    			
    			$(this).addClass('active');
    			
    			$(this).next('ul.sub-menu').slideToggle(350);
    			
    			
			});
			
			
			$('.menu_close').on('click', function(e) {
			  
				$('.header_middle').slideUp(300);
				
				$('.menu_close').removeClass('open');
			
			});
	    
	    
    }
	

checkWidthcase();



// current page clone

$('nav ul.menu > li.current-menu-ancestor > a').next('ul.sub-menu').clone().appendTo('.nav_clone').show();



// sidebar slideToggle


$('.sidebar_box ul.menu > li.menu-item-has-children > a').on('click', function(e) {
  
  $(this).next('ul.sub-menu').slideToggle(200);
  
  $(this).toggleClass('active');
  
});


// sidebar current page



	var pgurl = window.location.href;
	
	$(".sidebar_box.blog ul li").each(function(){
  
  if($(this).find('a').attr("href") == pgurl)
    
    $(this).addClass("active");
	
	})




// case results filter



$('.cr_input').on('click', function(e) {
  
  $('.cr_dropdown').slideToggle(350);
  
  $('.cr_filter_wrapper').toggleClass('open');

});



$('.cr_dropdown ul li ').on('click', function(e) {
  
  $('.cr_dropdown').slideToggle(350);
  
 });




$('.cr_single_post:last').css({
		'border':'none',
		'padding':'0',
		'margin':'0'
});


$('.cr_dropdown ul li').on('click', function(e) {
	  
		var textUpdate = $(this).text();
		
		$('.cr_input span').replaceWith('<span>' + textUpdate + '</span>');
		
		var mydata = $(this).data('acfcat');
		
		$('.cr_single_post').fadeOut(300);
		
			
		
		$('.' + mydata + '').delay(600).fadeIn(400);
		
		$('.' + mydata + ':last').css({
				'border':'none',
				'padding':'0',
				'margin':'0'
		});

});


// vue sidebar - im pulling in their https://www.aviationlawmonitor.com blog posts via rest api with vue.js into sidebar box


const vm = new Vue({
  el: '#app',
  data: {
    results: [
      {title: "the very first post", abstract: "lorem ipsum some test dimpsum"},
      {title: "and then there was the second", abstract: "lorem ipsum some test dimsum"},
      {title: "third time's a charm", abstract: "lorem ipsum some test dimsum"},
      {title: "four the last time", abstract: "lorem ipsum some test dimsum"}
    ]
  },
  mounted() {
    axios.get("https://api.nytimes.com/svc/topstories/v2/home.json?api-key=R590BZd3mHzNgnPVxBDyMW0zvQHPzKe4")
    .then(response => {this.results = response.data.results})
  }
});

  
}); // document ready