@component('mail::message')
<h1> Új kapcsolatfelvétel érkezett!</h1>
<hr/>

<h2>@lang('toContacter.invocation') {{ $contact->name }} !</h2>

@lang('toContacter.ourmsg')





   <b>Telefonszám:</b><br/> {{  $contact->phone }}




   <b>@lang('toContacter.regards')</b>
   Burcsa István

@endcomponent