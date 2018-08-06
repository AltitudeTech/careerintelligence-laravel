@extends('layouts.master')

@section('title','Candidate')

@section('css')
	@parent
	<style type="text/css">
		.banner1 {
		    background: url({{ asset('images/employers-x.jpg')}}) no-repeat  0px 0px;
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
					<h2>Employers</h2>
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
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nihil dolorem sunt, nisi nulla laudantium. Est iste, vel doloribus ducimus error provident cum corporis, nihil placeat laboriosam, ipsum odio dolorem!
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nihil dolorem sunt, nisi nulla laudantium. Est iste, vel doloribus ducimus error provident cum corporis, nihil placeat laboriosam, ipsum odio dolorem!
					</p>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nihil dolorem sunt, nisi nulla laudantium. Est iste, vel doloribus ducimus error provident cum corporis, nihil placeat laboriosam, ipsum odio dolorem!
					</p>
					<div class="col-md-9">
							<div class="row">
								<style>
									input, textarea{
										border-radius: 0 !important;
										resize: none ;
									}
								</style>
									<div style="margin-top: 40px;">
										{!! Form::open(['action' => 'RecruitingController@store' , 'method'=>'POST']) !!}
											<div class="col-md-6">
												<fieldset class="form-group">
													<input type="hidden" value="newR" name="newR" id="newR">
													<label for="organizationName"><span class="text-danger">*</span>First Name</label>
													<input type="text" name="organizationName" class="form-control" id="organizationName" required>
												</fieldset>	
											</div>
		
											<div class="col-md-6">	
												<fieldset class="form-group">
													<label for="contactName"><span class="text-danger">*</span>Last Name</label>
													<input type="text" name="contactName" class="form-control" id="contactName" required>
												</fieldset>
											</div>
		
											
											<div class="col-md-12">	
												<fieldset class="form-group">
													<label for="contactEmail"><span class="text-danger">*</span>Email Address</label>
													<input type="email" name="email" class="form-control" id="contactEmail" required>
												</fieldset>
											</div>

											<div class="col-md-12">
												<fieldset class="form-group">
													<label for="jobTitle"><span class="text-danger">*</span>Company's Name</label>
													<input type="text" name="jobTitle" class="form-control" id="jobTitle" required>
												</fieldset>	
											</div>
											<div class="col-md-6">
													<fieldset class="form-group">
														<input type="hidden" value="newR" name="newR" id="newR">
														<label for="organizationName"><span class="text-danger">*</span>Job Title</label>
														<input type="text" name="organizationName" class="form-control" id="organizationName" required>
													</fieldset>	
												</div>
			
												<div class="col-md-6">	
													<fieldset class="form-group">
														<label for="contactName"><span class="text-danger">*</span>Website</label>
														<input type="text" name="contactName" class="form-control" id="contactName" required>
													</fieldset>
												</div>
											<div class="col-md-12">	
												<fieldset class="form-group">
													<label for="contactEmail">Message</label><br/>
													<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
												</fieldset>
											</div>
											<br/>
		
											<div class="col-md-offset-8 col-md-4" style="margin-top : 10px ;">
												<input type="submit" value="Register" class="btn btn-block btn-success" name="">
											</div>
										{!! Form::close() !!}
										<div class="clearfix"></div>
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