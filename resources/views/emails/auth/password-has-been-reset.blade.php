@component('mail::message')
# Hi, {{ $user->name }}!

Your {{ config('app.name') }} account password has been reset!

If you didn't do this, you can secure your account by resetting with clicking button below.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
