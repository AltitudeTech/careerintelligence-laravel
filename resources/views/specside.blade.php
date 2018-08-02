<div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
	@if (count($sector) > 0)
	@php
		$count = 0 ;
	@endphp
		@foreach ($sector as $sec)
			<div class="panel panel-default"> <a title="{{ strtolower($sec->name)}}" 
				@if (count($sec->categories) > 0)
				href="#collapse{{ $sec->id }}"
				aria-controls="collapse{{ $sec->id }}" 
				aria-expanded="false" 
				data-parent="#accordion" 
				data-toggle="collapse" 
				id="heading{{ $sec->id }}" 
				@else
				href="{{ route('sectordisplay', ['secId'=> $sec->id ]) }}"
				@endif 
				role="tab" class="panel-heading collapsed">
				@if (count($sec->categories) > 0)
				<span class="glyphicon glyphicon-plus pull-right"></span>
				@endif
				<span class="panel-title">{{ $sec->name }}</span> </a>
				@if (count($sec->categories) > 0)
					<div aria-labelledby="heading{{ $sec->id }}" role="tabpanel" class="panel-collapse collapse" id="collapse{{ $sec->id }}" aria-expanded="false">
			            <ul class="list-group">
							@foreach ($sec->categories as $secCat)
			                    <a href="{{ route('sec-cat-recruit', ['specCat'=> $secCat->name, 'q' => $secCat->id ]) }}" class="list-group-item">{{ $secCat->name }}</a>
							@endforeach
		                </ul>
			        </div>
			     @else
			     	<div aria-labelledby="heading{{ $sec->id }}" role="tabpanel" class="panel-collapse collapse" id="collapse{{ $sec->id }}" aria-expanded="false">
			            <ul class="list-group">
			                <a href="#" class="list-group-item">{{ $sec->name . ' (No category yet)'}}</a>
		                </ul>
			        </div>
				@endif
		        
		    </div>
		@endforeach
	@endif
</div>