





@if($errors->any())
     @foreach ($errors->all() as $error)
        <span class='invalid-feedback' style="display:block;">
            <strong>{{$error}}</strong>
        </span>
     @endforeach
@endif




