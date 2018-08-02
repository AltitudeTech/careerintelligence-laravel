@extends('layouts.master')

@section('title','Contact')

@section('css')
	@parent
	<style type="text/css">
		.banner1 {
		    background: url({{ asset('images/contact/contactmain.jpg')}})  0px 0px no-repeat;
		    background-size: cover;
		    background-position: center;
		    -webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    -ms-background-size: cover;
		    position: relative;
			min-height:400px;
		}
		.wthree-different-dot1 {
			min-height:400px;
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
					<h2>Contact us</h2>
		</div>
	</div>

@endsection

@section('modal')
@parent

@endsection

@section('body')
	<div class="agile_about contact" id="contact">

		<div class="agileits_agile_about">
										<div class="agileinfo_map_color">
											<div class="agileinfo_map_color_grid">
												<div class="col-md-4 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Address</h4>
													<p>1572 km² London Borough of EalingCity - London.</p>
												</div>
												<div class="col-md-4 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Mail Us</h4>
													<p><a href="mailto:example@mail.com"> info@examplemail.com</a></p>
													<p><a href="mailto:example@mail.com"> info@examplemail1.com</a></p>
												</div>
												<div class="col-md-4 agileinfo_map_color_grid_left">
													<h4><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Phone</h4>
													<p>(0-12) 455 55 5555</p>
													<p>(0-12) 467 00 0019</p>
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>

	<div class="container">	
			<div class="agileits_agile_about_mail">
				<form action="#" method="post">
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="Name" placeholder="Name" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="Subject" placeholder="Subject" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="email" name="Email" placeholder="Email" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 agileits_agile_about_mail_left">
						<input type="text" name="Phone" placeholder="Phone" required="">
					<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<textarea name="Message" placeholder="Message..." required=""></textarea>
					<div class="submit">
						<input type="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //contact -->


@endsection