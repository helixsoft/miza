var hash=window.location.hash;
window.location.hash='';
history.pushState('', document.title, window.location.pathname);
(function($){
	
	"use strict";
	
    $(document).ready(function(){
		
		/* Hero height
		================================================== */
		var windowHeight = $(window).height();
		
		$('.hero').height( windowHeight );
		$('#parallax-section-2').addClass('parallax-banner-2');
		$('.parallax-banner-2').css("background-position","0px 0px");
		$('.parallax-banner-2').height('538');
		$(window).resize(function() {
			
			var windowHeight = $(window).height();
			$('.hero').height( windowHeight );
			$('.parallax-banner-2').height('538')
		});
		var diff=$('.hero-title-holder').offset().top - $('#first-section').offset().top;
		if(hash=='#top'){	
			$.scrollTo( '#top' ,650, { easing: 'swing' , offset: 1 , 'axis':'y' } );
			$( '#header-section' ).attr('class', 'ha-header '+ 'ha-header-hide');	
		}
		if(hash=='#service'){
			$.scrollTo( '#service' ,2000, { easing: 'swing' , offset: -80 , 'axis':'y' } );
			//$( '#header-section' ).attr('class', 'ha-header '+ 'ha-header-hide');	
		}	
		if(hash=='#address-section'){
			$.scrollTo( '#address-section' ,2000, { easing: 'swing' , offset: -80 , 'axis':'y' } );
			//$( '#header-section' ).attr('class', 'ha-header '+ 'ha-header-hide');	
		}
		$('.address-box .contact').on("click",function(){
            if($('#contact-section').css('display')=='none' || $(this).parent().parent('.address-box').hasClass('selected')){
				$('#contact-section').slideToggle('slow');
				$(this).parent().parent('.address-box').toggleClass('selected');
			}else{
				$('.address-box').removeClass('selected');
				$(this).parent().parent('.address-box').toggleClass('selected');
			}
        });
		/* Header / Navigation Animation
		================================================== */		
		var $header = $( '#header-section' );
		
		$( '.ha-waypoint' ).each( function(i) {
			
			/* needed vars */
			var $this = $( this ),
				animClassDown = $this.data( 'animateDown' ),
				animClassUp = $this.data( 'animateUp' );
			$this.waypoint(function(direction) {
				
				if( direction === 'down' && animClassDown ) {
					$('.small-head').removeClass('small-header-show').addClass('small-header-hide');
					$header.attr('class', 'ha-header ' + animClassDown );
					$('.icon1').css('opacity',0);	
				}
				else if( direction === 'up' && animClassUp ){
					$(window).scroll(function() {
						if($(this).scrollTop() == 0) {  
							$header.attr('class', 'ha-header ' + animClassUp );
						} 
					});

					$('.small-head').removeClass('small-header-hide').addClass('small-header-show');
					$('.icon1').stop(true, true).delay(300).animate({opacity:1},800);
				}			
			
			}, { offset: '-1px' } );
			
		});
		
		window.onscroll = function (event) {
		  	var new_diff=$('.hero-title-holder').offset().top - $('#first-section').offset().top;
		  	if(new_diff>0){
		  		$('.hero-title-holder,.btn-holder').css('opacity',0);
		  	}else{
		  		var ratio=new_diff/diff;
		  		$('.hero-title-holder,.btn-holder').css('opacity',ratio);
		  	}
		}
		$('.icon').click(function(e){
			e.preventDefault();
			$( '#header-section' ).attr('class', 'ha-header '+ 'ha-header-hide');
			$('.icon1').stop(true, true).delay(300).animate({opacity:1},800);
		});	
		$('.icon1').click(function(e){
			e.preventDefault();
			$( '#header-section' ).attr('class', 'ha-header '+ 'ha-header-show');
			$(this).css('opacity',0);
		});
		
		/* Slogan / Welcome Message Animation
		================================================== */
		$(window).load(function() {
			
			function show_slogan() {
				$('.hero-holder').animate({ opacity : 1 });
			}
					
			var execute_slogan = setTimeout ( show_slogan , 800 );
			
		});
		var top=0,key=-1;
		var time;
		$('#to-about-section').click( function(event) {
			event.preventDefault();
			top=0;key=-1;
			$(document).on('mousewheel DOMMouseScroll', function() {
				top = $(this).scrollTop();
			});
			$(document).keydown(function(e){
				key = e.keyCode;
			});
			if(top == 0 && key == -1){
			    $.scrollTo( $('#first-section') , 1600, {  offset: -80 , 'axis':'y' ,onAfter:function(){second();}} );
				
			}else{
				last();
				return true;
			}
			
		});
		
		function second(){
			time=setTimeout(function(){
				$(document).on('mousewheel DOMMouseScroll', function() {
					top = $(this).scrollTop();
				});
				$(document).keydown(function(e){
					key = e.keyCode;
				});
				
				if(top == 0 && key == -1){
					$.scrollTo( $('#second-section') , 1600, {  offset: -80 , 'axis':'y', onAfter:function(){clearTimeout(time);third();}} );
					third();
				}else{
					last();
				}
			}, 5000);
		}
		function third(){
			time=setTimeout(function(){
				$(document).on('mousewheel DOMMouseScroll', function() {
						top = $(this).scrollTop();
				});
				$(document).keydown(function(e){
					key = e.keyCode;
				});
				if(top == 0 && key == -1){
					$.scrollTo( $('#third-section') , 1600, {  offset: -80 , 'axis':'y' ,onAfter:function(){clearTimeout(time);fourth();}} );	
				}else{
					last();
				}
			}, 5000);
		}
		function fourth(){
			time=setTimeout(function(){
				$(document).on('mousewheel DOMMouseScroll', function() {
					top = $(this).scrollTop();
				});
				$(document).keydown(function(e){
					key = e.keyCode;
				});	
				if(top == 0 && key == -1){
					$.scrollTo( $('#service') , 1600, {  offset: -80 , 'axis':'y' ,onAfter:function(){clearTimeout(time);fifth();}} );
				}else{
					last();
				}
			}, 5000);
		}
		function fifth(){
			time=setTimeout(function(){
				$(document).on('mousewheel DOMMouseScroll', function() {
					top = $(this).scrollTop();
				});
				$(document).keydown(function(e){
					key = e.keyCode;
				});
				if(top == 0 && key == -1){
					$.scrollTo( $('#six-section') , 20000, {  easing: 'linear',offset: -80 , 'axis':'y' ,onAfter:function(){clearTimeout(time);sixth();}} );
				}else{
					last();
				}
			}, 5000);
		}
		function sixth(){
			time=setTimeout(function(){
				$(document).on('mousewheel DOMMouseScroll', function() {
					top = $(this).scrollTop();
				});
				$(document).keydown(function(e){
					key = e.keyCode;
				});
				if(top == 0 && key == -1){
					$.scrollTo( $('#address-section') , 1600, {  offset: -80 , 'axis':'y' ,onAfter:function(){clearTimeout(time);last();}} );
				}else{
					last();
				}
			}, 5000);
		}
		function last(){
			$(window)._scrollable().stop(true, false);
		}
		/* Scroll to Main
		================================================== */
		
		$('.one').hover(function(){
			$('.one').children('.border').hide();
		}, function() {
			$('.one').children('.border').show();
		});
		$('.two').hover(function(){
			$('.one').children('.border').hide();
			$('.two').children('.border').hide();
		}, function() {
			$('.one').children('.border').show();
			$('.two').children('.border').show();
		});
		$('.three').hover(function(){
			$('.two').children('.border').hide();
			$('.three').children('.border').hide();
		}, function() {
			$('.two').children('.border').show();
			$('.three').children('.border').show();
		});
		$('.four').hover(function(){
			$('.three').children('.border').hide();
			$('.four').children('.border').hide();
		}, function() {
			$('.three').children('.border').show();
			$('.four').children('.border').show();
		});

		$('#ca-container').contentcarousel();
		$('.ca-nav').hide();	
		$('.ca-nav-next').bind('click.contentcarousel', function( event ) {
				$('.team-box .team-player').each(function( k ) {
					var el = $(this);
					if(k==4){
						el.removeClass('animate');
					    el.removeClass('click');
						setTimeout ( function () {
							el.addClass('animate');
							el.addClass('click');
						},1);
					}
				});
		});
		$('.ca-nav-prev').bind('click.contentcarousel', function( event ) {
				$('.team-box .team-player').each(function( k ) {
					var el = $(this);
					if(k==4){
						el.removeClass('animate');
						el.removeClass('click');
						setTimeout ( function () {
							el.addClass('animate');
							el.addClass('click');
						},1);
					}
				});
		});
		$('#ca-container').bind('mousewheel.contentcarousel', function(e, delta) {
			if(delta > 0) {
				$('.team-box .team-player').each(function( k ) {
					var el = $(this);
					if(k==4){
						el.removeClass('animate');
						el.removeClass('click');
						setTimeout ( function () {
							el.addClass('animate');
							el.addClass('click');
						},1);
					}
				});
			}	
			else {
				$('.team-box .team-player').each(function( k ) {
					var el = $(this);
					if(k==4){
						el.removeClass('animate');
						el.removeClass('click');
						setTimeout ( function () {
							el.addClass('animate');
							el.addClass('click');
						},1);
					}
				});
			}	
		});
		function animate_team() {
			
			var len=$('.team-box .team-player').length;
			$('.team-box .team-player').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					if(k<4){
						el.addClass('animate');
					}
					else{
						el.addClass('animate');
						el.addClass('click');
					}
					if(k==len-1){
						$('.ca-nav').show();
					}
				},  k*500 );
			});
			
		}

		/* service box */
		function animate_sevice() {
				
			$('.sevice-box nav li').each(function( k ) {
				
				var el = $(this);
				
				setTimeout ( function () {
					el.addClass('animate');
				},  k * 300 );
				
			});
		
		}
		function animate_sections() {
			
				/* team section */
				$('#third-section').waypoint( function( direction ) {
									
					if( direction === 'down' && !$(this).hasClass('animated') ) {
						
						setTimeout( animate_team , 1000);
						
						$(this).addClass('animated');
							
					}
					
				} , { offset: '450px' } );

				$('#service').waypoint( function( direction ) {
									
					if( direction === 'down' && !$(this).hasClass('animated') ) {
						
						setTimeout( animate_sevice , 1000);
						
						$(this).addClass('animated');
							
					}
					
				} , { offset: '400px' } );
					
			}
			
			/* no animation for mobile and ie 8 */
			if( !device.tablet() && !device.mobile() && Modernizr.csstransitions ) {
				animate_sections();
			}


			
		
		
	});	
	$(function() {

			var $sidescroll	= (function() {
					
					// the row elements
				var $rows			= $('#ss-container > div.ss-row'),
					// we will cache the inviewport rows and the outside viewport rows
					$rowsViewport, $rowsOutViewport,
					// navigation menu links
					$links			= $('#ss-links > a'),
					// the window element
					$win			= $(window),
					// we will store the window sizes here
					winSize			= {},
					// used in the scroll setTimeout function
					anim			= false,
					// page scroll speed
					scollPageSpeed	= 2000 ,
					// page scroll easing
					scollPageEasing = 'easeInOutExpo',
					// perspective?
					hasPerspective	= false,
					
					perspective		= hasPerspective && Modernizr.csstransforms3d,
					// initialize function
					init			= function() {
						
						// get window sizes
						getWinSize();
						// initialize events
						initEvents();
						// define the inviewport selector
						defineViewport();
						// gets the elements that match the previous selector
						setViewportRows();
						// if perspective add css
						if( perspective ) {
							$rows.css({
								'-webkit-perspective'			: 600,
								'-webkit-perspective-origin'	: '50% 0%'
							});
						}
						// show the pointers for the inviewport rows
						$rowsViewport.find('a.ss-circle').addClass('ss-circle-deco');
						// set positions for each row
						placeRows();
						
					},
					// defines a selector that gathers the row elems that are initially visible.
					// the element is visible if its top is less than the window's height.
					// these elements will not be affected when scrolling the page.
					defineViewport	= function() {
					
						$.extend( $.expr[':'], {
						
							inviewport	: function ( el ) {
								if ( $(el).offset().top < winSize.height ) {
									return true;
								}
								return false;
							}
						
						});
					
					},
					// checks which rows are initially visible 
					setViewportRows	= function() {
						
						$rowsViewport 		= $rows.filter(':inviewport');
						$rowsOutViewport	= $rows.not( $rowsViewport )
						
					},
					// get window sizes
					getWinSize		= function() {
					
						winSize.width	= $win.width();
						winSize.height	= $win.height();
					
					},
					// initialize some events
					initEvents		= function() {
						
						// navigation menu links.
						// scroll to the respective section.
						$links.on( 'click.Scrolling', function( event ) {
							
							// scroll to the element that has id = menu's href
							$('html, body').stop().animate({
								scrollTop: $( $(this).attr('href') ).offset().top
							}, scollPageSpeed, scollPageEasing );
							
							return false;
						
						});
						
						$(window).on({
							// on window resize we need to redefine which rows are initially visible (this ones we will not animate).
							'resize.Scrolling' : function( event ) {
								
								// get the window sizes again
								getWinSize();
								// redefine which rows are initially visible (:inviewport)
								setViewportRows();
								// remove pointers for every row
								$rows.find('a.ss-circle').removeClass('ss-circle-deco');
								// show inviewport rows and respective pointers
								$rowsViewport.each( function() {
								
									$(this).find('div.ss-left')
										   .css({ left   : '0%' })
										   .end()
										   .find('div.ss-right')
										   .css({ right  : '0%' })
										   .end()
										   .find('a.ss-circle')
										   .addClass('ss-circle-deco');
								
								});
							
							},
							// when scrolling the page change the position of each row	
							'scroll.Scrolling' : function( event ) {
								
								// set a timeout to avoid that the 
								// placeRows function gets called on every scroll trigger
								if( anim ) return false;
								anim = true;
								setTimeout( function() {
									
									placeRows();
									anim = false;
									
								}, 10 );
							
							}
						});
					
					},
					// sets the position of the rows (left and right row elements).
					// Both of these elements will start with -50% for the left/right (not visible)
					// and this value should be 0% (final position) when the element is on the
					// center of the window.
					placeRows		= function() {
						
							// how much we scrolled so far
						var winscroll	= $win.scrollTop(),
							// the y value for the center of the screen
							winCenter	= winSize.height / 2 + winscroll;
						
						// for every row that is not inviewport
						$rowsOutViewport.each( function(i) {
							
							var $row	= $(this),
								// the left side element
								$rowL	= $row.find('div.ss-left'),
								// the right side element
								$rowR	= $row.find('div.ss-right'),
								// top value
								rowT	= $row.offset().top;
							
							// hide the row if it is under the viewport
							if( rowT > winSize.height + winscroll ) {
								
								if( perspective ) {
								
									$rowL.css({
										'-webkit-transform'	: 'translate3d(-75%, 0, 0) rotateY(-90deg) translate3d(-75%, 0, 0)',
										'opacity'			: 0
									});
									$rowR.css({
										'-webkit-transform'	: 'translate3d(75%, 0, 0) rotateY(90deg) translate3d(75%, 0, 0)',
										'opacity'			: 0
									});
								
								}
								else {
								
									$rowL.css({ left 		: '-50%' ,opacity	: 0});
									$rowR.css({ right 		: '-50%' ,opacity   : 0});
								
								}
								
							}
							// if not, the row should become visible (0% of left/right) as it gets closer to the center of the screen.
							else {
									
									// row's height
								var rowH	= $row.height(),
									// the value on each scrolling step will be proporcional to the distance from the center of the screen to its height
									factor 	= ( ( ( rowT + rowH / 2 ) - winCenter ) / ( winSize.height / 2 + rowH / 2 ) ),
									// value for the left / right of each side of the row.
									// 0% is the limit
									val		= Math.max( factor * 50, 0 );
									
								if( val <= 0 ) {
								
									// when 0% is reached show the pointer for that row
									if( !$row.data('pointer') ) {
									
										$row.data( 'pointer', true );
										$row.find('.ss-circle').addClass('ss-circle-deco');
									
									}
								
								}
								else {
									
									// the pointer should not be shown
									if( $row.data('pointer') ) {
										
										$row.data( 'pointer', false );
										$row.find('.ss-circle').removeClass('ss-circle-deco');
									
									}
									
								}
								
								// set calculated values
								if( perspective ) {
									
									var	t		= Math.max( factor * 75, 0 ),
										r		= Math.max( factor * 90, 0 ),
										o		= Math.min( Math.abs( factor - 1 ), 1 );
									
									$rowL.css({
										'-webkit-transform'	: 'translate3d(-' + t + '%, 0, 0) rotateY(-' + r + 'deg) translate3d(-' + t + '%, 0, 0)',
										'opacity'			: o
									});
									$rowR.css({
										'-webkit-transform'	: 'translate3d(' + t + '%, 0, 0) rotateY(' + r + 'deg) translate3d(' + t + '%, 0, 0)',
										'opacity'			: o
									});
								
								}
								else {
									var o		= Math.min( Math.abs( factor - 1 ), 1 );
									$rowL.css({ left 	: - val + '%' ,'opacity'			: o});
									$rowR.css({ right 	: - val + '%' ,'opacity'			: o});
									if(o==1){
										$rowL.find('.ss-circle').addClass('glow');
									}else{
										$rowL.find('.ss-circle').removeClass('glow');
									}
								}
								
							}	
						
						});
					
					};
				
				return { init : init };
			
			})();
			
			$sidescroll.init();
			
		});
})(jQuery);

jQuery(document).ready(function($) {

	var postType = fangohr_dynload.postType;
	var pageNum = parseInt(fangohr_dynload.startPage) + 1;
	var postPageNum = parseInt(fangohr_dynload.startPostPage) + 1;
	var max = parseInt(fangohr_dynload.maxPages);
	var nextLink = fangohr_dynload.nextLink;
	var nextPostPageLink = fangohr_dynload.nextPostPageLink
	var maxPostPage = $('#continue_post').addClass('continue_post_' + postPageNum ).attr('data-maxPages') ;
	if (!nextLink) {
		$('#view_more_posts').addClass('hidden');
	}
	$('#view_more_posts').click(function() {
		// Are there more posts to load?
		if(pageNum <= max) {
		
			// Show that we're working.
			$(this).text('Loading...');
			
			$('.more_posts_'+ pageNum).load(nextLink + ' .post',
				function() {
					// Update page number and nextLink.
					$('.more_posts_'+ pageNum).addClass('animate');
					pageNum++;
					nextLink = nextLink.replace(/\/page\/[0-9]?/, '/page/'+ pageNum);
					// Add a new placeholder, for when user clicks again.
					$('.grid-container')
						.append('<div class="more_posts_'+ pageNum +'"></div>')
					
					// Update the button message.
					if(pageNum <= max) {
						$('#view_more_posts').text('Load More');
					} else {
						$('#view_more_posts').text('No More Post');
					}
				}
			);
		} else {
			$('#view_more_posts').text('No More Post');
		}	
		
		return false;
	});
});