<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-4 footerleft">
			<h3>About Us</h3>
			<ul class="w3agile_footer_grid_list">
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('mission') }}">Mission & Values </a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('companystructure') }}">Company Structure</a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('franchise') }}">Franchise</a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('market') }}">Market</a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('citc') }}">CITC</a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('join-us') }}">Join Us</a></li>
			</ul>
		</div>
		<div class="col-md-4 footermiddle">
			<h3>Resources</h3>
			<ul class="w3agile_footer_grid_list">
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('careeradvice') }}">Career Advice</a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('marketintel') }}">Market Intelligence</a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('globalhelpdesk') }}">Global Help Desk</a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('events') }}">Events</a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('citv') }}">CITV</a></li>
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('faqs') }}">FAQs</a></li>
			</ul>
			<!-- 
			<p>1572 km² London Borough of EalingCity</p>
			<p>London,No 008921</p>
			<p class="phone">phone: +0(21) 334 5678</p>
			<p class="phone">Fax: +0(21) 334 5678</p>
			<p class="phone">Mail: <a href="mailto:info@pret.global">info@pret.global</a></p>
			-->
		</div>
		<div class="col-md-4 footerright">
			<h3>Navigation</h3>
				<ul class="w3agile_footer_grid_list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('candidate') }}">Candidates</a></li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('employer') }}">Employers</a></li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('contact') }}">Contact Us</a></li>
					<li style="border: 2px solid #c0392b ; width: 200px ; padding: 10px 0px ;"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> <a href="{{ route('executiveservices') }}">EXECUTIVE SEARCH</a></li>
				</ul>

		<!-- <ul class="w3agile_footer_grid_list">
				<li>Ut aut reiciendis voluptatibus adipiscing <a href="#">example.com</a> alias, ut aut.
				<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
				<li>Itaque earum rerum hic tenetur a sapiente <a href="#">example.com</a> ut aut.
				<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
			</ul> 
		-->
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //footer -->
<style type="text/css">
	.wthree_copy_right p.privacylinks span{
	    color: #EC5451 ;
	}
	.wthree_copy_right p.privacylinks{
	    margin: 20px 0px ;

	}
	.wthree_copy_right p.privacylinks a{   
	    letter-spacing: 2px;
	    color: #b2b2b0 ;
	    font-size: 10px !important ;
	}
</style>
<!-- copyright -->
<div class="wthree_copy_right">
	<div class="container">
		<p style="width:15%; margin: 20px auto;">
			<span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=49Efa6zFYjD2qMZvBasSDyxtZP5HrA2Y2Eo6GajHcVq2pHUficj2q3nmTnTB"></script></span>
		</p>
		<img style="width:15%;right:0" src="{{asset('images/mobiledownload.png')}}" alt="">
		<div class="clearfix"></div>
		<p class="privacylinks">
			<a href="{{ route('policy') }}">Privacy Policy</a>  <span>|</span>
			<a href="{{ route('cookie') }}">Cookie Policy</a> <span>|</span>
			<a href="{{ route('termsofuse') }}">Terms of Use</a> <span>|</span>
			<a href="{{ route('disclaimer') }}">Disclaimer</a>
		</p>
		<p>© 2018 Career Intelligence. All rights reserved | Powered By <a href="http://altitude-tech.com/">Altitude Technology Worldwide</a></p>
			
	</div>
</div>