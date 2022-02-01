




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
    
    <select class="form-control" id="gender" name="status" required>
        	@forelse($elements as $element)
        		<option value="{{$element[0]}}"
                    @if($current_value == $element[0])
                        selected
                    @endif
                    >{{$element[1]}}</option>
        	@empty

        	@endforelse
    </select>



<style type="text/css" scoped>

</style>