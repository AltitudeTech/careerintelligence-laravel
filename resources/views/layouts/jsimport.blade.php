<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- //Default-JavaScript-File -->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

					<!--banner Slider starts Here-->
						<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
					<!--banner Slider ends Here-->
			
				
		<!-- Stats-Number-Scroller-Animation-JavaScript -->
				<script src="{{ asset('js/waypoints.min.js') }}"></script> 
				<script src="{{ asset('js/counterup.min.js') }}"></script> 
				<script>
					jQuery(document).ready(function( $ ) {
						$('.counter').counterUp({
							delay: 100,
							time: 1000
						});
					});
				</script>
		<!-- //Stats-Number-Scroller-Animation-JavaScript -->


	<script src="{{ asset('js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

			<!-- FlexSlider-JavaScript -->
	<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
	<script type="text/javascript">
		$(function(){
			//SyntaxHighlighter.all();
				});
		$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
					$('body').removeClass('loading');
				}
			});
		});

		$( function() {

		    $( "#location" ).autocomplete({
		      source: '{{ route('searchLoc') }}'
		    });
  });

	</script>
	<!-- //FlexSlider-JavaScript -->