@component('mail::message')
# Ding dong~

Someone in your department has post new idea.
<br>

"{{$subject}}"

@component('mail::button', ['url' => 'http://127.0.0.1:8000/homepage'])
Visit DISCUSS.ION
@endcomponent


This email is auto-generated.
<br>
View more in DISCUSS.ION.
@endcomponent
