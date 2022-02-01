





<div 
    @if(!isset($top_spacer))
        style="height:30px;"
    @else
        style="height:{{$top_spacer}}px;"
    @endif
    >
</div>

@if(isset($label))
	<label>{{$label}}</label>
@endif
@if(isset($small))
	<small class="d-block">{{$small}}</small>
@endif
<div class="input-group" style="width:100%;"">
	
	<input class="form-control"  type="number"  
	 		@if(isset($min)) min="{{$min}}" @endif 
	 		@if(isset($max)) max="{{$max}}" @endif
	 		@if(isset($name)) name="{{$name}}" @endif 
	 		@if(isset($value)) value="{{$value}}" @endif 
	 		>

	 @if(isset($ratio))
    <div class="input-group-addon">
        <span class="input-group-text"> {{$ratio}}</span>
    </div>
    @endif

</div>


<style type="text/css">
</style>