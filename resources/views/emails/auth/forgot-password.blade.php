@component('mail::message')
# Hi, {{ $user->name }}!

You received this email is because you requesting a password reset at {{ config('app.name') }}.

You can click button below to reset your password.

@component('mail::button', ['url' => url('/password/reset/' . $token)])
Reset
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
