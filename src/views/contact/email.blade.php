@component('mail::message')
# Introduction

The body of your name is {{ $name }}.
The body of your message is {{ $message }}.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
