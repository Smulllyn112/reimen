


<form class="contact_by_phone" action="{{route('contact_by_phone')}}" method="POST">
	@csrf
	<div class="row">
		<div class="col-md-3">
			<input type="text" name="name" placeholder="* Név" required>
		</div>	
		<div class="col-md-3">
			<input type="text" name="phone" placeholder="* Telefonszám" required>
		</div>
		<div class="col-md-3">
			<input type="submit" name="Küldd!" class="button-theme">
		</div>	
	</div>


</form>