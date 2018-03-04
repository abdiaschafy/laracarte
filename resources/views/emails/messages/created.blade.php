@component('mail::message')
# Merci de nous avoir écrit nous vous répondrons dans de brefs délais.

{{ $msg->name }}

{{ $msg->email }}


@component('mail::panel')
	{{ $msg->message }}
@endcomponent


@component('mail::button', ['url' => ''])
Répondre
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
