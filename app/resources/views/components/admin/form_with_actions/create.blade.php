




<form  class="primary-form-2 mt-15" method="post" action="{{ route($route) }}" enctype="multipart/form-data" onsubmit="return validateForm()">
             @csrf


 



         {{$slot}}



@include('components.admin.forms.showValidationFails')
</form>