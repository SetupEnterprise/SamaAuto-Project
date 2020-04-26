@component('mail::message')
# Inscription validée

-{{$prenom}} {{$nom}}

@component('mail::button', ['url' => ''])
Authentification
@endcomponent

Merci d'utiliser,<br>
{{ config('app.name') }}
@endcomponent
