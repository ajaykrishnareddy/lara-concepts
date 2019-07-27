@component('mail::message')
# Introduction

<p>Name: {{$data['email']}}</p>
<p>Password: {{$data['password']}}</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
