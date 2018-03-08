@component('mail::message')
# Hi, {{ $user->name }}!

Thanks for register at {{ config('app.name') }}! 

Let's verify your account by clicking the button below.

@component('mail::button', ['url' => $url])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
