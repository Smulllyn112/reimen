

@component('mail::message')
<h2>@lang('toContacter.invocation') {{ $contact->name }} !</h2>

@lang('toContacter.ourmsg')

<br/><br/>
    <b>E-mail:</b> {{  $contact->email }}
<br/>

<br/><br/>
   <b>Telefonszám:</b> {{  $contact->phone }}
<br/><br/>

   <b>@lang('toContacter.message')</b>

   <br/>
   {!! nl2br( $contact->message) !!}

   <br/><br/>

   <b>@lang('toContacter.regards')</b>

   <br/>
   HORVÁTH SZÁLLÍTÁS
   <br/><br/>
@endcomponent


