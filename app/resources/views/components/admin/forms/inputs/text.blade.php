@if(!isset($top_spacer))
<div style="height:30px;" >
</div>

   
@else
<div  style="height:{{ $top_spacer }}px;">
</div>
@endif


    @if(isset($label))
        <label class="display_block">{{$label}}</label>
    @endif
    @if(isset($small))
        <small class="d-block">{{$small}}</small>
    @endif



    <input class="form-control" type="text" id="name" 
            @if(isset($placeholder)) placeholder="{{$placeholder}}"  @endif
            
            @if(isset($value)) value="{{$value}}"  @endif

            @if(isset($name)) name="{{$name}}" @endif

            @if(isset($readonly)) readonly @endif
            >



<style type="text/css" scoped>
.display_block{
    display: block;
}

</style>