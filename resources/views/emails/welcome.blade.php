@component('mail::message')
# Welcom to ATOM

Thank you for registering, we will get back to you shortly.

@component('mail::button', ['url' => ''])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
