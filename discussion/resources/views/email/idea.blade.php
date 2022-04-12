@component('mail::message')
# Ding dong~
<br>
Dear, QA coordinator.
<br>
Someone in your department has post new idea.
<br>

@component('mail::button', ['url' => 'http://127.0.0.1:8000/homepage'])
Visit DISCUSS.ION
@endcomponent


This email is auto-generated.
<br>
View more in DISCUSS.ION.
@endcomponent
