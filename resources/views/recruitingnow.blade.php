@extends('layouts.master')

@section('title','Recruitment')

@section('css')
	@parent
	<style type="text/css">
		.well , .btn , .form-control
		{
			border-radius: 0px ;
		}
		label{
			color: #646666 ;
		}
		textarea{
			resize: none ;
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
				<h2>Recruitment</h2>
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
					<h4>Sectors</h4>
					@include('specside')

					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
							<div id="myTabContent" class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
									<div class="tab_img">
										<div class="col-md-12 col-sm-12 col-xs-12 portfolio-grids" data-aos="zoom-in">
											<a href="{{ asset('images/g1.jpg') }}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="{{ asset('images/g1.jpg') }}" class="img-responsive" alt="Specialization - CI" />
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12 portfolio-grids" data-aos="zoom-in">
											<a href="{{ asset('images/g2.jpg') }}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="{{ asset('images/g2.jpg') }}" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12 portfolio-grids" data-aos="zoom-in">
											<a href="{{ asset('images/g3.jpg') }}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="{{ asset('images/g3.jpg') }}" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12 portfolio-grids" data-aos="zoom-in">
											<a href="{{ asset('images/g4.jpg') }}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
												<img src="{{ asset('images/g4.jpg') }}" class="img-responsive" alt="Specialization - CI"/>
												<div class="b-wrapper">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
													<h5>Career Intelligence</h5>
												</div>
											</a>
										</div>
										<div class="clearfix"> </div>
									</div>
									
								</div>
							</div>
						</div>
				</div>
				<div class="col-md-8">
					<div class="gallery-grids">
						
						<div class="row">

							@if (session('status'))
							    <div class="alert alert-success">
							        {{ session('status') }}
							    </div>
							@endif
							
							<div class="well" style="margin-top: 20px;">
								<h4>Search for Jobs</h4>
								<hr>
								<div class="clearfix"></div>
								{!! Form::open(['action' => 'RecruitingController@store' , 'method' => 'POST']) !!}
								<input type="hidden" value="searchJ" name="searchJ" id="searchJ">
									<div class="col-md-6">
										<label for="">
											Job Title
										</label>
										<input type="text" class="form-control" name="">
									</div>

									<div class="col-md-6">
										<label for="">
											Location
										</label>
										<input type="text" class="form-control" name="">
									</div>
									<div class="col-md-6" style="margin-top : 10px ;">
										<button type="submit" class="btn btn-info"><span class="fa fa-search"></span> Search</button>
										
									</div>
								{!! Form::close() !!}
									<div class="clearfix"></div>

							</div>	
						</div>


						<div class="row">
							<div class="well" style="margin-top: 20px;">
								<h3>Recruiting Now ?</h3>
								<hr>
								{!! Form::open(['action' => 'RecruitingController@store' , 'method'=>'POST']) !!}
									<div class="col-md-6">
										<fieldset class="form-group">
											<input type="hidden" value="newR" name="newR" id="newR">
											<label for="organizationName"><span class="text-danger">*</span>Your Organization Name</label>
											<input type="text" name="organizationName" class="form-control" id="organizationName" required>
										</fieldset>	
									</div>

									<div class="col-md-6">	
										<fieldset class="form-group">
											<label for="contactName"><span class="text-danger">*</span>Contact Name</label>
											<input type="text" name="contactName" class="form-control" id="contactName" required>
										</fieldset>
									</div>

									<div class="col-md-6">
										<fieldset class="form-group">
											<label for="jobTitle"><span class="text-danger">*</span>Job Title</label>
											<input type="text" name="jobTitle" class="form-control" id="jobTitle" required>
										</fieldset>	
									</div>

									<div class="col-md-6">	
										<fieldset class="form-group">
											<label for="contactEmail"><span class="text-danger">*</span>Email</label>
											<input type="email" name="email" class="form-control" id="contactEmail" required>
										</fieldset>
									</div>

									<div class="col-md-6">
										<fieldset class="form-group">
											<label for="mobileNumber"><span class="text-danger">*</span>Mobile Number</label>
											<input type="number" name="mobileNumber" class="form-control" id="mobileNumber" required>
										</fieldset>	
									</div>

									<div class="col-md-6">	
										<fieldset class="form-group">
											<label for="salaryRange">Salary Range</label>
											<input type="text" name="salaryRange" class="form-control" id="salaryRange">
										</fieldset>
									</div>

									<div class="col-md-6">
										<fieldset class="form-group">
											<label for="empType">Employment Type</label>
											<select class="form-control" name="empType" id="empType">
												<option>Permanent</option>
												<option>Contract</option>
												<option>Temporary</option>
											</select>
										</fieldset>
										<fieldset class="form-group">
											<label for="sectorId">Select Sector</label>
											<select class="form-control" id="sector" name="sectorId">
												@if (count($sector) > 0)
													@foreach ($sector as $sec)
														<option value="{{ $sec->id}}">
															{{ $sec->name }}
														</option>
													@endforeach
												@endif
											</select>
										</fieldset>
									</div>

									<div class="col-md-6">	
										<fieldset class="form-group">
											<label for="countryId">Select Country:</label>
							                <select id="country" name="countryId" class="form-control" style="width:350px;">
								                @foreach($countries as $country)
													<option value="{{$country->id}}"> {{$country->name}}</option>
												@endforeach
											</select>
										</fieldset>

										 <fieldset class="form-group">
							                <label for="stateId">Select State:</label>
							                <select name="stateId" id="state" class="form-control" style="width:350px">
							                </select>
							            </fieldset>
										<fieldset class="form-group">
							                <label for="cityId">Select City:</label>
							                <select name="cityId" id="city" class="form-control" style="width:350px">
							                </select>
						            	</fieldset>
									</div>
									


									<div class="col-md-12" style="margin-top : 10px ;">
										<fieldset class="form-group">
											<label for="basicInfo">Basic  Information About Role</label>
											<textarea class="form-control" name="basicInfo" rows="10" id="country"></textarea>
										</fieldset>
									</div>	

									<div class="col-md-12">	
										<fieldset class="form-group">
											<label for="moreInfo">Further Information About Role</label>
											<textarea class="form-control" name="moreInfo" rows="10" id="country"></textarea>
										</fieldset>
									</div>

									<div class="col-md-12">
										<div class="checkbox">
											<label>
												<input name="terms" type="checkbox"><span class="text-danger">*</span> I have read and accept the  <a href="#"> Terms and Conditions </a> of use, Privacy Policy and Disclaimer and consent to receiving information from Career Intelligence.
											</label>
										</div>
										
									</div>

									<div class="col-md-6" style="margin-top : 10px ;">
										<input type="submit" value="Send" class="btn btn-block btn-warning" name="">
									</div>
								{!! Form::close() !!}
								<div class="clearfix"></div>
							</div>	
						</div>
						
					</div>
				</div>
			</div>	
		</div>	
	</section>

@endsection

@section('basicjs')
	<script type="text/javascript">
		$(document).ready(function() {
				    $('#country').change(function(){
				    var countryID = $(this).val();    
				    if(countryID){
				        $.ajax({
				           type:"GET",
				           url:"{{url('api/get-state-list')}}?country_id="+countryID,
				           success:function(res){               
				            if(res){
				                $("#state").empty();
				                $("#state").append('<option>Select</option>');
				                $.each(res,function(key,value){
				                    $("#state").append('<option value="'+key+'">'+value+'</option>');
				                });
				           
				            }else{
				               $("#state").empty();
				            }
				           }
				        });
				    }else{
				        $("#state").empty();
				        $("#city").empty();
				    }      
				   });
				    $('#state').on('change',function(){
				    var stateID = $(this).val();    
				    if(stateID){
				        $.ajax({
				           type:"GET",
				           url:"{{url('api/get-city-list')}}?state_id="+stateID,
				           success:function(res){               
				            if(res){
				                $("#city").empty();
				                $.each(res,function(key,value){
				                    $("#city").append('<option value="'+key+'">'+value+'</option>');
				                });
				           
				            }else{
				               $("#city").empty();
				            }
				           }
				        });
				    }else{
				        $("#city").empty();
				    }
				        
				   });
				});
	</script>
@endsection