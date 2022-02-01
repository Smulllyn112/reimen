


<form class="col-10"
	@if(!isset($method))
		method="POST"
	@else
		method="{{$method}}" 
	@endif
	
	@if(!isset($id))
		action="{{ route($route) }}" 
	@else
		action="{{route( $route,['id'=>$id] )}}" 
	@endif  
>
@csrf

@if(isset($method) && $method=='PUT')
	@method('PUT')
@endif


	{{$slot}}

</form>