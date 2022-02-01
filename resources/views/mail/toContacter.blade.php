

@component('mail::message')
<h2>@lang('toContacter.invocation') {{ $contact->name }} !</h2>

@lang('toContacter.ourmsg') 


    <b>E-mail:</b><br/> {{  $contact->email }}



   <b>Telefonszám:</b><br/> {{  $contact->phone }}


   <b>@lang('toContacter.message')</b>

   
   {!! nl2br( $contact->message) !!}



   <b>@lang('toContacter.regards')</b>

   Burcsa István
   
@endcomponent


