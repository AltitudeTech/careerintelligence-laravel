@extends('layouts.master')

@section('title','Franchise')

@section('css')
	@parent
	<style type="text/css">
		.banner1 {
		    background: url({{ asset('images/broadcast.jpg')}}) no-repeat  0px 0px;
		    background-size: cover;
		    background-position: center;
		    -webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    -ms-background-size: cover;
		    position: relative;
			min-height:500px;
		}
		.wthree-different-dot1 {
			min-height:500px;
		}
		.agileits_agile_about p{
			margin: 10px auto ;
			letter-spacing: 1px ;
			line-height: 30px ;
			text-align: justify;
		}

		.agileits_agile_about img{
			float: left ;
			margin: 20px 15px 0px 0px ;
			width: 40% ;
		}
	</style>

@endsection


@section('banner')

	<div class=" banner banner1">
		<div class="wthree-different-dot1">
			<!-- header -->
			<div class="header">
				<div class="container">
					@include('layouts.nav')
				</div>
			</div>
			<!-- //header -->
					<h2>CITV</h2>
		</div>
	</div>

@endsection

@section('modal')

@parent

@endsection

@section('body')
	<div class="agile_about contact" id="contact">

	<div class="agileits_agile_about">
		<div class="container">	
			<div class="row">
					<div class="col-md-9">

						<div class="row">	
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
										  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										  <li data-target="#myCarousel" data-slide-to="1"></li>
										  <li data-target="#myCarousel" data-slide-to="2"></li>
										</ol>
									
										<!-- Wrapper for slides -->
										<div class="carousel-inner">
									
										  <div class="item active">
											<img src="{{ asset('images/la.jpg')}}" alt="Los Angeles" style="width:100%;">
											<div class="carousel-caption">
											  <h3>Los Angeles</h3>
											  <p>LA is always so much fun!</p>
											</div>
										  </div>
									
										  <div class="item">
											<img src="{{ asset('images/chicago.jpg')}}" alt="Chicago" style="width:100%;">
											<div class="carousel-caption">
											  <h3>Chicago</h3>
											  <p>Thank you, Chicago!</p>
											</div>
										  </div>
										
										  <div class="item">
											<img src="{{ asset('images/ny.jpg')}}" alt="New York" style="width:100%;">
											<div class="carousel-caption">
											  <h3>New York</h3>
											  <p>We love the Big Apple!</p>
											</div>
										  </div>
									  
										</div>
									
										<!-- Left and right controls -->
										<a class="left carousel-control" href="#myCarousel" data-slide="prev">
										  <span class="glyphicon glyphicon-chevron-left"></span>
										  <span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#myCarousel" data-slide="next">
										  <span class="glyphicon glyphicon-chevron-right"></span>
										  <span class="sr-only">Next</span>
										</a>
									  </div>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="row">	
							<img style="max-height: 400px;" src="{{ asset('images/broadcastb.jpg') }}" class="img img-responsive img-thumbnail">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="col-md-3">
						@include('serviceside')
					</div>
				</div>
		</div>
	</div>
</div>
<!-- //contact -->


@endsection