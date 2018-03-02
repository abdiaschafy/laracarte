@component('mail::message')
# Introduction

{{ $msg->name }}

{{ $msg->email }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel')
	{{ $msg->msg }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
