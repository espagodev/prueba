@component('mail::message')
#  {{ $dato->asunto }}
<br>
Fecha: {{ $dato->fecha}}
<br>
<br>
{{ $dato->texto }}
<br>
<br>
Atentamente,<br>
{{ config('app.name') }}
@endcomponent
