@component('mail::message')
# Introduction

a subject has been sent by a user :)

@component('mail::button', ['url' => '/'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
