
        @if(isset($top_spacer))
        <div  style="height:{{$top_spacer}}px;">
        </div>
        @else
        <div  style="height:5px;">
        </div>        
        @endif    



    @if(isset($label))
    	<label class="display-block">{{$label}}</label>
    @endif
    @if(isset($small_text))
        <small>{{$small_text}}</small>
    @endif

    <div class=" ">
    	@if(isset($extra_text))
    		<small class="display-block">{{$extra_text}}</small>
    	@endif
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="{{$name}}"
            	@if(isset($value)) 
					value="{{$value}}"
					@if(isset($checkedIfValue) && $checkedIfValue == $value  ) checked @endif
				@endif   
            	
            	>
            {{$description}}
          </label>
        </div>
    </div>



<style type="text/css" scoped>
	.display-block{
		display:block;
	}
    .margin-left{
        /*margin:0 0 0 20px;*/
        position:relative;
        left:3px;
    }

</style>
