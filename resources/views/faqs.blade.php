@extends('layouts.master')

@section('title','FAQs')

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
					<h2>FAQs</h2>
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
								<style>
								.accordion {
									background-color: #eee;
									color: #444;
									cursor: pointer;
									padding: 18px;
									width: 100%;
									border: none;
									text-align: left;
									outline: none;
									font-size: 15px;
									transition: 0.4s;
								}
								
								.active, .accordion:hover {
									background-color: #ccc;
								}
								
								.accordion:after {
									content: '\002B';
									color: #777;
									font-weight: bold;
									float: right;
									margin-left: 5px;
								}
								
								.active:after {
									content: "\2212";
								}
								
								.panel {
									padding: 0 18px;
									background-color: white;
									max-height: 0;
									overflow: hidden;
									transition: max-height 0.2s ease-out;
								}
								</style>	
								<button class="accordion">Question 1</button>
								<div class="panel">
								  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								
								<button class="accordion">Question 2</button>
								<div class="panel">
								  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								
								<button class="accordion">Question 3</button>
								<div class="panel">
								  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
								
								<script>
								var acc = document.getElementsByClassName("accordion");
								var i;
								
								for (i = 0; i < acc.length; i++) {
								  acc[i].addEventListener("click", function() {
									this.classList.toggle("active");
									var panel = this.nextElementSibling;
									if (panel.style.maxHeight){
									  panel.style.maxHeight = null;
									} else {
									  panel.style.maxHeight = panel.scrollHeight + "px";
									} 
								  });
								}
								</script>
						</div>
						<div class="row">	
							<img style="max-height: 400px;" src="{{ asset('images/faqb.png') }}" class="img img-responsive img-thumbnail">
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