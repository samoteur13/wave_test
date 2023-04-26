@component('mail::message')
# Introduction

You asked for it {{ config('app.name') }} to the rescue.

@component('mail::button', ['url' => 'http://localhost:8000/reset-password?token='.$token])
Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent