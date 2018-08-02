@extends('layouts.master')

@section('title','Countries')

@section('css')
	@parent
	<style type="text/css">
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
					<h2>Countries Testing</h2>
		</div>
	</div>
@endsection

@section('modal')
@parent

@endsection

@section('body')

	<section class="portfolio-agileinfo" id="portfolio">

		<div class="container">
		    <div class="panel panel-default">
		      <div class="panel-heading">Dependent country state city dropdown using ajax in PHP Laravel Framework</div>
		      <div class="panel-body">
		            <div class="form-group">
		                <label for="title">Select Country:</label>
		                <select id="country" name="country" class="form-control" style="width:350px;">
							@foreach($countries as $country)
								<option value="{{$country->id}}"> {{$country->name}}</option>
							@endforeach
						</select>
		               
		            </div>
		            <div class="form-group">
		                <label for="title">Select State:</label>
		                <select name="state" id="state" class="form-control" style="width:350px">
		                </select>
		            </div>
		         
		            <div class="form-group">
		                <label for="title">Select City:</label>
		                <select name="city" id="city" class="form-control" style="width:350px">
		                </select>
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
				            	console.log(res) ;
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

