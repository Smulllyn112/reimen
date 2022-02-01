


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
    <textarea class="form-control"
    @if(isset($rows)) rows="{{$rows}}" @else rows="3" @endif 

    @if(isset($placeholder)) 
    	placeholder="{{$placeholder}}" 
    @else 
    	placeholder="..."

    @endif 

    @if(isset($name)) 
    	name="{{$name}}" 
    @endif 

    @if(isset($id)) 
    	id="{{$id}}" 
    @endif

    @if(isset($readonly)) readonly @endif


    >@if(isset($value)){{$value}}@endif</textarea>


<style type="text/css" scoped>

</style>