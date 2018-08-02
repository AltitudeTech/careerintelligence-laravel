@extends('layouts.master')

@section('title','Sector')


@section('css')
	@parent
	<style type="text/css">
	 	.form-control, textarea, .btn{
			border-radius: 0px !important ;

		}
		textarea{
			resize: none;
			height: 150px !important ;
		}
		.fa{
			font-size: 20px ;
		}
		.panel > .list-group
		{
		    margin-bottom: 0;
		}
		.panel > .list-group .list-group-item
		{
		    border-width: 1px 0;
		}
		.panel > .list-group .list-group-item:first-child
		{
		    border-top-right-radius: 0;
		    border-top-left-radius: 0;
		}
		.panel > .list-group .list-group-item:last-child
		{
		    border-bottom: 0;
		}
		a.panel-heading {
		    display: block;
		}
		.panel-primary .panel-heading[aria-expanded="true"], .panel-primary .panel-heading a:hover, .panel-primary .panel-heading a:focus, .panel-primary a.panel-heading:hover, .panel-primary a.panel-heading:focus {
			background-color: #286090;
		}
		.panel-danger .panel-heading[aria-expanded="true"], .panel-danger .panel-heading a:hover, .panel-danger .panel-heading a:focus, .panel-danger a.panel-heading:hover, .panel-danger a.panel-heading:focus {
			background-color: #c9302c;
		}
		.panel-default .panel-heading[aria-expanded="true"], .panel-default .panel-heading a:hover, .panel-default .panel-heading a:focus, .panel-default a.panel-heading:hover, .panel-default a.panel-heading:focus {
			background-color: #dcdcdc;
		}
		.panel-info .panel-heading[aria-expanded="true"], .panel-info .panel-heading a:hover, .panel-info .panel-heading a:focus, .panel-info a.panel-heading:hover, .panel-info a.panel-heading:focus {
			background-color: #31b0d5;
		}
		.panel-success .panel-heading[aria-expanded="true"], .panel-success .panel-heading a:hover, .panel-success .panel-heading a:focus, .panel-success a.panel-heading:hover, .panel-success a.panel-heading:focus {
			background-color: #449d44;
		}
		.panel-warning .panel-heading[aria-expanded="true"], .panel-warning .panel-heading a:hover, .panel-warning .panel-heading a:focus, .panel-warning a.panel-heading:hover, .panel-warning a.panel-heading:focus {
			background-color: #ec971f;
		}
		.panel-group .panel, .panel-group .panel-heading {
			border: none !important;
		}
		.panel-group .panel-body {
			border: 1px solid #ddd !important;
			border-width: 0 1px 1px 1px !important;
		}
		.panel-group .panel-heading a, .panel-group a.panel-heading {
			outline: 0;
		}
		.panel-group .panel-heading a:hover, .panel-group .panel-heading a:focus, .panel-group a.panel-heading:hover, .panel-group a.panel-heading:focus {
			text-decoration: none;
		}
		.panel-group .panel-heading .icon-indicator {
			margin-right: 10px;
		}
		.panel-group .panel-heading .icon-indicator:before {
			content: "\e114";
		}
		.panel-group .panel-heading.collapsed .icon-indicator:before {
			content: "\e080";
		}
	</style>

@endsection


@section('modal')
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 id="modaltitle">Add New Sector</h4>
					<h5 id="sector-title"> </h5>
					<form class="form-horizontal">
                        {{ csrf_field() }}
                         <input id="sectorId" type="hidden" name="sectorId">
                        <div class="form-group{{ $errors->has('sector') ? ' has-error' : '' }}">
                            <label for="sector" class="col-md-4 control-label">Sector Name</label>

                            <div class="col-md-6">
                                <input id="sectorName" type="text" class="form-control" name="sector" value="{{ old('sector') }}" required autofocus>

                                @if ($errors->has('sector'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sector') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Sector Description</label>

                            <div class="col-md-6">
                            	<textarea id="sectorDescription" class="form-control" name="description">
                            		
                            	</textarea>
                            </div>
                        </div>
                    </form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" style="display: none;" data-dismiss="modal" id="deleteBtn">Delete</button>
					<button type="button" class="btn btn-primary" style="display: none;" data-dismiss="modal" id="createBtn">Create</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="updateBtn">Update</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelBtn">Cancel</button>
				</div>
			</div>
		</div>
	</div>
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
					<h2>Sector</h2>
		</div>
	</div>
@endsection


@section('body')

		<section class="portfolio-agileinfo" id="portfolio">
		<h3>Admin - Sector</h3>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h4 style="margin: 15px ;">Admin Control Options</h4>
					@include('admin.controlmenu')
				</div>
				<div class="col-md-9">
					<div class="gallery-grids" id="sectorDisplay">
						@if (count($sector) > 0)
							<table class="table table-inverse">
								<thead>
									<tr>
										<th width="5%">S/N</th>
										<th width="25%">Sector Name</th>
										<th width="60%">Description</th>
										<th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $count = 1 ; ?>
									@foreach ($sector as $sec)
										<tr>
											<td>{{ $count++ }}</td>
											<td>{{ $sec->name }}</td>
											<td>
												@if (strlen($sec->description) > 0)
													{{ str_limit($sec->description, 100) }}
												@else
													{{ 'No Description' }}
												@endif
											</td>
											<th>
												<a href="#" class="editSector" id="{{ $sec->id }}"  data-toggle="modal" data-target="#myModal1"><i class="fa fa-pencil text-success" aria-hidden="true"></i></a> | 
												<a href="#" class="deleteSector" id="{{ $sec->id }}"  data-toggle="modal" data-target="#myModal1"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i></a>
											</th>
										</tr>
									@endforeach
								</tbody>
							</table>
						@else
						<p>
							You Have No Sector, Click Here To Create Sector
						</p>
						@endif
					</div>
				</div>
			</div>	
		</div>	
	</section>


@endsection


@section('basicjs')
	<script type="text/javascript">
		$(document).ready(function() {
			$(document).on('click', '.editSector', function(event) {
				$('#modaltitle').text('Edit Sector') ;
				$('#sectorId').val($(this).attr("id")) ;
				$.get("http://localhost/careerintelligence/public/admin/sector/" + $(this).attr("id"), {'id': $(this).id , '_token' : $('input[name=_token]').val() }, function(data) {
					$('#sectorName').val(data['name']) ;
					$('#sectorDescription').val(data['description']) ;
					$('#updateBtn').show(400) ;
					$('#createBtn').hide(400) ;
					$('#deleteBtn').hide(400) ;
					console.log(data['id']) ;
				});
			});

			$(document).on('click', '.deleteSector', function(event) {
				$('#modaltitle').text('Delete Sector') ;
				$('#sectorId').val($(this).attr("id")) ;
				$.get("http://localhost/careerintelligence/public/admin/sector/" + $(this).attr("id"), {'id': $(this).id , '_token' : $('input[name=_token]').val() }, function(data) {
					$('#sectorName').val(data['name']) ;
					$('#sectorDescription').val(data['description']) ;
					$('#deleteBtn').show(400) ;
					$('#updateBtn').hide(400) ;
					$('#createBtn').hide(400) ;
					console.log(data['id']) ;
				});
			});

			$(document).on('click', '#createNewSector', function(event) {
				event.preventDefault();
				$('#sectorName').val('') ;
				$('#sectorDescription').val('') ;
				$('#modaltitle').text('Create New Sector') ;
				$('#sectorName').val('') ;
				$('#sectorDescription').val('') ;
				$('#createBtn').show(400) ;
				$('#updateBtn').hide(400) ;
				
			});

			$('#createBtn').click(function(event) {
				var sectorName = $('#sectorName').val() ;
				var sectorDescription = $('#sectorDescription').val() ;
				$.post("{{ route('sector.store') }}", {'sectorName': sectorName , 'sectorDescription' : sectorDescription , '_token' : $('input[name=_token]').val() }, function(data) {
					$('#sectorDisplay').load(location.href + ' #sectorDisplay') ;
					$('#sectorName').val('') ;
					$('#sectorDescription').val('') ;
					console.log(data) ;
				});
			});

			$('#deleteBtn').click(function(event) {
				$.ajax({
					   url: "http://localhost/careerintelligence/public/admin/sector/" + $('#sectorId').val() ,
					   type: 'DELETE',
					   data : {'id': $('#sectorId').val() , '_token' : $('input[name=_token]').val()},
					   success: function(data) {
							$('#sectorDisplay').load(location.href + ' #sectorDisplay') ;
							alert("Category Successfully Deleted");
							console.log(data) ;
					   },
					   error: function (xhr, ajaxOptions, thrownError) {
				        //alert(xhr.status);
				        alert("Sorry, You cant this peration, This Sector Contains Categories ");
				        //alert(thrownError);
				      }
					});
			});

			$('#updateBtn').click(function(event) {
				$('#modaltitle').text('Update Sector') ;
				$.ajax({
					   url: "http://localhost/careerintelligence/public/admin/sector/" + $('#sectorId').val() ,
					   type: 'PUT',
					   data : {	
					   			'id': $('#sectorId').val() , 
					   			'_token' : $('input[name=_token]').val(),
					   			'description' : $('#sectorDescription').val(),
					   			'name' : $('#sectorName').val()
					   		},
					   success: function(data) {
							$('#sectorDisplay').load(location.href + ' #sectorDisplay') ;
							console.log(data) ;
					   }
					});
			});
		});
	</script>
@endsection

