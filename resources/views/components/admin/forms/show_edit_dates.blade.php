

<div 
    @if(!isset($top_spacer))
        style="height:30px;"
    @else
        style="height:{{$top_spacer}}px;"
    @endif
    >
</div>



@if($element->created_at)
	<p>Létrehozva: {{$element->created_at}}</p>
@endif

@if($element->updated_at)
	<p>Módosítva: {{$element->updated_at}}</p>
@endif

    



<style type="text/css" scoped>

</style>