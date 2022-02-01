
@component('mail::message')
<h1> Új kapcsolatfelvétel érkezett!</h1>
<hr/>

<h2>@lang('toContacter.invocation') {{ $contact->name }} !</h2>

@lang('toContacter.ourmsg')

<br/><br/>
    <b>E-mail:</b> {{  $contact->email }}
<br/><br/>

<br/><br/>
   <b>Telefonszám:</b> {{  $contact->phone }}
<br/><br/>

   <b>@lang('toContacter.message')</b>

   <br/><br/>
   {!! nl2br( $contact->message) !!}

   <br/><br/>

   <b>@lang('toContacter.regards')</b>

   <br/><br/>
   HORVÁTH SZÁLLÍTÁS
   <br/><br/>


@endcomponent

