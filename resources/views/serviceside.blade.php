<div class="list-group">
	<a class="list-group-item active text-center">SERVICES</a>
	<a href="{{ route('permanentplacement') }}" class="list-group-item">Permanent Placement</a>
	<a href="{{ route('temporaryplacement') }}" class="list-group-item">Temporary Placement</a>
	<a href="{{ route('internships') }}" class="list-group-item">Internships</a>
	<a href="{{ route('outplacement') }}" class="list-group-item">Outplacement</a>
	<a href="{{ route('featureddigitalcampaign') }}" class="list-group-item">Featured Digital Campaign</a>
	<a href="{{ route('digitalizedvideo') }}" class="list-group-item">Digitalized Video Assessment Interview</a>
	<a href="{{ route('recruitmentprocess') }}" class="list-group-item">Recruitment Process Outsourcing
	<a href="{{ route('internationalrecruitment') }}" class="list-group-item">International Recruitment</a>
	<a href="{{ route('hr-services') }}" class="list-group-item">HR Services</a>
	<a href="{{ route('labour-market-research') }}" class="list-group-item">Labour Market Research</a>
	<a href="{{ route('salaryandremuneration') }}" class="list-group-item">Salaries & Remuneration Bench Marking</a>
	<a href="{{ route('executiveservices') }}" class="list-group-item">Executive Services</a>

	<a class="list-group-item active text-center">SECTORS</a>
	@foreach (App\Admin\Sector::all() as $sector)
		<a href="{{ route('sectordisplay', ['secId'=> $sector->id ]) }}" class="list-group-item">{{ $sector->name }}</a>
	@endforeach
	{{-- <a href="{{ route('sector') }}" class="list-group-item text-right">More Sectors</a> --}}
</div>