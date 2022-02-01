

<div 
    @if(!isset($top_spacer))
        style="height:30px;"
    @else
        style="height:{{$top_spacer}}px;"
    @endif
    >
</div>




@if(isset($label))
    <label >{{$label}}</label>
@endif
    
    <select class="form-control"
        @if(!isset($name)) 
            name="category_id"
        @else
            name="{{$name}}"
        @endif
        >
        	@forelse($elements as $element)
        		<option value="{{$element->id}}"
                    @if(isset($selected) && $element->id == $selected  )
                        selected
                    @endif
                    >
                        @if(!isset($relationships))
                            {{$element->title}}
                        @else
                            
                        @endif
                    </option>
        	@empty

        	@endforelse
    </select>



<style type="text/css" scoped>

</style>