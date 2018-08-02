@extends('layouts.master')

@section('title','Registration')

@section('css')
	@parent
	<style type="text/css">
		.banner1 {
		    background: url({{ asset('images/faq.jpg')}}) no-repeat  0px 0px;
		    background-size: cover;
		    background-position: center;
		    -webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    -ms-background-size: cover;
		    position: relative;
			min-height:65px;
			height: 65px ;
		}
		.wthree-different-dot1 {
			min-height:65px;
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
		#can , #emp{
			width: 100% ;
			min-height: 300px ;
			border: 2px solid #b2b2b2 ;
			text-align: center;
			padding: 25px ;
		}

		#can h2 , #emp h2{
			margin:20% auto 10px;
		}
		#can a , #emp a{
			border-radius: 0px ;
			padding: 20px 30px ;
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
							<div class="col-md-6">
								<div id="can">
									<h2>Candidate</h2>
									<span class="help-block">
										Ready to make the smart move for your career? 
									</span>
									<a href="#" data-toggle="modal" data-target="#canModalRegForm" data-dismiss="modal"  class="btn btn-danger btn-lg">Register NOW</a>
								</div>
								<div class="clearfix"></div>
								<div>
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
							</div>
							<div class="col-md-6">
								<div id="emp">
									<h2>Employer</h2>
									<span class="help-block">
										Ready to make the smart move for your company? 
									</span>
									<a href="#" data-toggle="modal" data-target="#empModalRegForm" data-dismiss="modal" class="btn btn-danger btn-lg">Register NOW</a>
								</div>
								<div class="clearfix"></div>
								<div>
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
							</div>
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