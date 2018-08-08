@extends('layouts.master')

@section('title','CITC')

@section('css')
	@parent
	<style type="text/css">
		.banner1 {
		    background: url({{ asset('images/citc.jpg')}}) no-repeat  0px 0px;
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
					<h2>Career Intelligence Training Center</h2>
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
				<div class="col-md-12">
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro distinctio magni laborum aliquid deleniti voluptatum corrupti dicta commodi nulla, incidunt, reiciendis corporis consequatur! Unde vero asperiores cum aut eius placeat!
					</p>
				</div>
					<div class="col-md-9">
						<div style="display:grid; grid-template-columns: 1fr 2fr; grid-gap:10px">
							<div>
								<img style="width:100%;" src="{{asset('images/citv-cover.png')}}" />
							</div>
							<div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident,deserunt mollit anim id est laborum.
								</p>
								<span style="color:red; cursor:pointer" data-toggle="collapse" data-target="#citc1">See More >>></span>
								<p id="citc1" class="collapse">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
							</div>
						</div>
						<div style="display:grid; grid-template-columns: 1fr 2fr; grid-gap:10px">
							<div>
								<img style="width:100%;" src="{{asset('images/citv-cover2.png')}}" />
							</div>
							<div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident,deserunt mollit anim id est laborum.
								</p>
								<span style="color:red; cursor:pointer" data-toggle="collapse" data-target="#citc2">See More >>></span>
								<p id="citc2" class="collapse">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
								</p>
								<br/><br/><br/><br/>
								@include('serviceform')
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