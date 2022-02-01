@component('mail::message')
<h1>Új feliratkozás az EMERICUS-on!</h1>
<hr/>



<br/><br/>
    <b>E-mail:</b> {{  $newsLetter->email }}
<br/><br/>

   <b>Szülő Neve:</b><br/>
   {!! nl2br( $newsLetter->parent_name) !!}

   <b>Második szülő Neve:</b><br/>
   {!! nl2br( $newsLetter->second_parent_name) !!}

   <b>Gyerek Neve:</b><br/>
   {!! nl2br( $newsLetter->child_name) !!}

   <b>Gyerek Születése:</b><br/>
   {!! nl2br( $newsLetter->child_name) !!}

   <b>Osztály:</b><br/>
   {!! nl2br( $newsLetter->class) !!}

   <b>Edzések:</b><br/>
   @foreach($newsLetter->department_section as $section)
      {{$section}}
   @endforeach

   <b>@lang('toContacter.regards')</b>

   <br/>
   EMERICUS
   <br/><br/>


@endcomponent


