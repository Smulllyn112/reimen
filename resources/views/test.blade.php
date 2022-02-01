     <link href="{{asset('guest/guest_template/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<div id="app">
	<test1></test1>

	@php
		$elements=[1,2,3,4,5,6,7]
	@endphp

	<div class="container">
		<div class="row">
			@foreach($elements as $element)
			<div class="col-md-4">
				<button>ok</button>
			</div>
			@endforeach
		</div>
	</div>
</div>








   <script src="{{ asset('js/app.js') }}"></script>
