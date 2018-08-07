@extends('layouts.master')

@section('title','SubmitCV')

@section('css')
	@parent
	<style type="text/css">
		.banner1 {
		    background: url({{ asset('images/sendcv/sendcvmain.jpg') }} ) no-repeat 0px 0px;
		    background-size: cover;
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
		.well , .btn , .form-control
		{
			border-radius: 0px ;
		}
		.lead{
			font-size : 15px ;
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
					<h2>Submit CV</h2>
		</div>
	</div>
@endsection

@section('modal')
@parent

@endsection

@section('body')

	<section class="portfolio-agileinfo" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					@include('serviceside')
				</div>
				<div class="col-md-8">
					<div class="gallery-grids">

						<div class="row">
							<div class="well">
								<h4>Send Your CV</h4>
								<hr>
								<div class="clearfix"></div>
								<div class="col-md-6">
									<label for="">
										First Name
									</label>
									<input type="text" class="form-control" name="">
								</div>

								<div class="col-md-6">
									<label for="">
										Last Name
									</label>
									<input type="text" class="form-control" name="">
								</div>

								<div class="col-md-6">
									<label for="">
										Email
									</label>
									<input type="text" class="form-control" name="">
								</div>

								<div class="col-md-6">
									<label for="">
										Phone
									</label>
									<input type="text" class="form-control" name="">
								</div>

								<div class="col-md-6">
									<label for="">
										Sector
									</label>
									<input type="text" class="form-control" name="">
								</div>
								<div class="col-md-6">
									<label for="">
										Location
									</label>
									<input type="text" class="form-control" name="">
								</div>


								<div class="col-md-12">
									<fieldset class="form-group">
										<label for="">
											Upload CV
										</label>
										<div class="input-group input-file" name="Fichier1">
											<span class="input-group-btn">
								        		<button class="btn btn-default btn-choose" type="button">Choose</button>
								    		</span>
								    		<input type="text" class="form-control" placeholder='Choose a file...' />
								    		<span class="input-group-btn">
								       			 <button class="btn btn-warning btn-reset" type="button">Reset</button>
								    		</span>
										</div>
									</fieldset>

								</div>


								<div class="col-md-6" style="margin-top : 10px ;">
									<input type="button" value="SEND" class="btn btn-lg btn-warning" name="">
								</div>
									<div class="clearfix"></div>

							</div>	
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</section>

@endsection