


<div class="a"><i class="fa fa-arrow-left" aria-hidden="true"></i>
	@if(!isset($route_param))
		<a href="{{ route($route) }}" style=font >Vissza a menübe</a>
	@else
		<a href="{{ route($route,$route_param) }}" style=font >Vissza a menübe</a>
	@endif
</div>
<style>
div.a {
  font-size: 30px;
  padding:13px;
}
</style>
