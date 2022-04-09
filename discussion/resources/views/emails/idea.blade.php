@component('mail::message')
# Ding dong~


{{$name}} has post an idea in {{$title}} of {{$category}}

@component('mail::button', ['url' => 'http://127.0.0.1:8000/homepage'])
Visit DISCUSS.ION
@endcomponent


This email is auto-generated.
<br>
View more in DISCUSS.ION.
@endcomponent
