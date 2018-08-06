
<nav class="navbar navbar-default">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
		<div class="w3layouts-logo">
			<a href="{{ route('index') }}"><img style="max-width: 200px" src="{{ asset('images/logo2.png') }}" class="img-responsive" alt=""></a>
		</div>
	</div>

	
	<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
		<nav>
			<ul class="nav navbar-nav">
				
				<li class="
					@if ($title == 'Home')
						{{ 'active' }}
					@endif
				"><a href="{{ route('index') }}">Home</a></li>

				<li class="dropdown
					@if ($title == 'About')
						{{ 'active' }}
					@endif
				"><a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">About Us <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('mission') }}">Mission & Values </a></li>
						<li><a href="{{ route('companystructure') }}">Company Structure</a></li>
						<li><a href="{{ route('franchise') }}">franchise</a></li>
						{{-- <li><a href="{{ route('citv') }}">CITV</a></li> --}}
						<li><a href="{{ route('market') }}">Market</a></li>
						<li><a href="{{ route('citc') }}">CITC</a></li>
						<li><a href="{{ route('join-us') }}">Join Us</a></li>
					</ul>
			  </li>
				{{-- <li class="
					@if ($title == 'About')
						{{ 'active' }}
					@endif
				"><a href="{{ route('search') }}">Job Search</a></li> --}}
				

				<li class="dropdown
				"><a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Services <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('permanentplacement') }}">Permanent Placement</a></li>
						<li><a href="{{ route('temporaryplacement') }}">Temporary Placement</a></li>
						<li><a href="{{ route('internships') }}">Internships</a></li>
						<li><a href="{{ route('outplacement') }}">Outplacement</a></li>
						<li><a href="{{ route('featureddigitalcampaign') }}">Featured Digital Campaign</a></li>
						<li><a href="{{ route('digitalizedvideo') }}">Digitalized Video Assessment and  Interview</a></li>
						<li><a href="{{ route('recruitmentprocess') }}">Recruitment Process Outsourcing</a></li>
						<li><a href="{{ route('internationalrecruitment') }}">International Recruitment</a></li>
						<li><a href="{{ route('hr-services') }}">HR Services</a></li>
						<li><a href="{{ route('labour-market-research') }}">Labour Market Research</a></li>
						<li><a href="{{ route('salaryandremuneration') }}">Salaries & Remuneration Bench marking</a></li>
						<li><a href="{{ route('executiveservices') }}">Executive Services</a></li>
					</ul>
			  </li>
				<li class="dropdown
				"><a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Sectors <b class="caret"></b></a>
					<ul class="dropdown-menu">
						@include('sectordrop')
					</ul>
			  </li>

				{{-- <li class="dropdown
					@if ($title == 'Partner')
						{{ 'active' }}
					@endif
				"><a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Partners <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="{{ route('google') }}">Google</a></li>
						<li><a href="{{ route('linkedin') }}">LinkedIn</a></li>
						<li><a href="{{ route('hireselect') }}">Hire Select</a></li>
						<li><a href="{{ route('hirevue') }}">Hire Vue</a></li>
						<li><a href="{{ route('talentrecruit') }}">Talent Recruit</a></li>
						<li><a href="{{ route('myprofile') }}">My Profile</a></li>
					</ul>
			  </li> --}}
				<li class="dropdown
					@if ($title == 'Login' || $title == 'Register')
						{{ 'active' }}
					@endif
				"><a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Login <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#" data-toggle="modal" data-target="#ModalLoginForm" data-dismiss="modal">Candidate</a></li>
						<li><a href="#" data-toggle="modal" data-target="#empModalLoginForm">Employer</a></li>
					</ul>
				  </li>
				<li class="
					@if ($title == 'Join Us')
						{{ 'active' }}
					@endif
				"><a href="{{ route('join-us') }}">JOIN US</a></li>
				<li class="
					@if ($title == 'CITV')
						{{ 'active' }}
					@endif
				"><a href="{{ route('citv') }}"> CITV</a></li>


				<li class="
					@if ($title == 'Contact')
						{{ 'active' }}
					@endif
				"><a href="{{ route('contact') }}">Contact Us</a></li>
				<style type="text/css">
					li#last a,li#last a:hover{
						border:none !important;
						color:#d35400;
						font-weight: bold;
					}
				</style>
				<li id="last" class="
					@if ($title == 'Contact')
						{{ 'active' }}
					@endif
				"><a href="{{ route('submitcv') }}">Send CV</a></li>
			</ul>
		</nav>
	</div>
</nav>					