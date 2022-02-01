

<form method="post" action="{{ route($route,['id' => $id]) }}" enctype="multipart/form-data"   >



         @csrf

         @method('PUT')


         {{$slot}}


@include('components.admin.forms.showValidationFails')
</form>