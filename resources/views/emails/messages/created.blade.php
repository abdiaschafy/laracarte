@component('mail::message')
# Introduction

{{ $name }}

{{ $email }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel')
	{{ $msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
