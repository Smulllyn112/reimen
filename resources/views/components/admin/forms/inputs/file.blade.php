

<div 
	@if(!isset($top_spacer))
		style="height:30px;"
	@else
		style="height:{{$top_spacer}}px;"
	@endif
	></div>

<label for="myfile">
	@if(isset($label))
		{{$label}}
	@else
		Kép feltöltése
	@endif
</label>
<div class="input-group">
	<input type="file" class="form-control" 
		name="{{$name}}"
	@if(isset($required))
		required
	@endif

	>
	@if(isset($placeholder))
		<span class="input-group-addon">
			{{$placeholder}}
		</span>
	@endif
</div>

<style type="" scoped>

</style>