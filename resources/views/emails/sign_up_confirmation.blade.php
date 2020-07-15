@component('mail::message')
# Inscription validée

Salut # {{$prenom}}, <br>
Nous vous informons que votre inscription s'est realisée avec succés. Vous pouvez profiter de nos services en toute tranquilité.
<br>Avec {{ config('app.name') }} voyager en toute fiabilité et confort.

login :  <br>
mot de passe : 


@component('mail::button', ['url' => ''])
Authentification
@endcomponent

Merci d'avoir choisi,<br>
# {{ config('app.name') }}
@endcomponent
