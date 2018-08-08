@extends('layouts.master')

@section('title','Search')

@section('css')
	@parent
	<style type="text/css">
		.banner1 {
		    background: #000 url({{ asset('images/jobsearch/js.jpg')}}) no-repeat  0px 0px;
		    background-size: contain;
		    background-position: center;
		    -webkit-background-size: contain;
		    -moz-background-size: contain;
		    -o-background-size: contain;
		    -ms-background-size: contain;
		    position: relative;
			min-height:550px;
		}
		.wthree-different-dot1 {
			min-height:550px;
		}

		.well , .btn, .panel,.form-control{
			border-radius: 0px ;
		}
		.panel-body{
			color: #000000;
		}
		.list-group
		{
			width: 100% ;
		}
		.list-group-item
		{
			border: 0px;
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
					<h2>Search</h2>
					<br><br>
					<div class="container">
						<div class="w3l-heading">
							@include('jobsearchpanel')
						</div>
					</div>
		</div>
	</div>
@endsection

@section('modal')
	@parent
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>Business Group</h4>
							<img src="images/2.jpg" alt=" " class="img-responsive">
							<h5>Success your business </h5>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
						</div>
					</div>
				</div>
			</div>
@endsection

@section('body')
		<div class="aboutpage">
	<div class="container">
	

		<div class="col-md-4 aboutpageleft">
			<div class="well well-sm bg-primary">
				<p class="text-center text-primary">Sort</p>	
				<hr style="border:1px solid black">
				<p>
					<button class="btn btn-info">CLEAR</button>
					<span class="text-center">Filter By</span>
				</p>

				<div class="panel panel-default">
				  <div class="panel-body">
				  	<h5 style="padding: 10px;">Pay</h5>
				  	<hr style="margin:0px; padding: 0px;">
				  		<select class="form-control pull-left" style="width: 40%;">
				  			<option>0</option>
				  		</select>
				  		<span style="padding: 20px;">To</span>
				  		<select class="form-control pull-right" style="width: 40%;">
				  			<option>200+</option>
				  		</select>
				  		<div class="clear-fix"></div><br>
				  		<select class="form-control pull-left" style="width: 60%; margin-right: 10px ;">
				  			<option>Anually</option>
				  			<option>Monthly</option>
				  			<option>Daily</option>
				  			<option>Hourly</option>
				  		</select>
				  		<button class="btn btn-info">Update</button>
				  		<div class="clear-fix"></div>
				  </div>
				</div>



				<div class="panel panel-default">
				  <div class="panel-body">
				  	<h5 style="padding: 10px;">Job Type</h5>
				  	<hr>
				  		<ul class="list-group" style="margin:0px ;" >
						  @if (count($empTypeCount) > 0)
				  				{{-- expr --}}
					  			@foreach ($empTypeCount as $etc)
					  				<li class="list-group-item"><a>{{ $etc->empType}}</a><span class="badge">{{ $etc->empTypeC}}</span></li>
					  			@endforeach

					  		@else
								<p>Jobs Are Yet To Be Posted</p>
					  		@endif
						</ul>
				  </div>
				</div>

				<div class="panel panel-default">
				  <div class="panel-body">
				  	<h5 style="padding: 10px;">Location</h5>
				  	<hr>
				  		<ul class="list-group" style="margin:0px ;" >
				  			@if (count($cityAndJobCount) > 0)
				  				{{-- expr --}}
					  			@foreach ($cityAndJobCount as $cjc)
					  				<li class="list-group-item"><a>{{ $cjc->cityName}}</a><span class="badge">{{ $cjc->countJC}}</span></li>
					  			@endforeach

					  		@else
								<p>Jobs Are Yet To Be Posted In Any City</p>
					  		@endif
						</ul>
				  </div>
				</div>

				<div class="panel panel-default">
				  <div class="panel-body">
				  	<h5 style="padding: 10px;">Sectors</h5>
				  	<hr>
				  		<ul class="list-group" style="margin:0px ;" >
				  			@if (count($sectorAndJobCount) > 0)
					  			@foreach ($sectorAndJobCount as $sjc)
					  				<li class="list-group-item"><a>{{ $sjc->sectorName}}</a><span class="badge">{{ $sjc->countSJ}}</span></li>
					  			@endforeach

					  		@else
								<p>Jobs Are Yet To Be Posted In Any Sector</p>
					  		@endif
						</ul>
				  </div>
				</div>
			</div>					
		</div>




		<div class="col-md-8 aboutpagemiddle">
			<h3>Search Result</h3>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- about -->

<!-- servicesbottom -->
<!-- Counter -->
	@include('counterclient')
<!-- //Clients 
<div class="statbottom">
	<div class="container">
		<h3>The purpose of a business is to create a customer</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
		incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .</p>
		<div class="more-button text-center">
			<a href="#" class="hvr-bounce-to-bottom scroll" data-toggle="modal" data-target="#myModal1">Load More</a>
		</div>
	</div>
</div>
-->
<!-- //servicesbottom -->

@endsection