@component('mail::message')
# Welcome to DISCUSS.ION.

Hi, {{$name}}.
<br>
Discussion boards aid in the development of a social presence as well as a sense of community in an online course. Emotional bonds can be forged as a result of presence and community.
<br><br>
Your temporary username and password will be:
<br><br>
Username: {{$name}}
<br>
Password: {{$password}}
<br><br>
You can change your password in your profile.


@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Visit DISCUSS.ION
@endcomponent


Best Regards,
<br>
DISCUSS.ION Team
<br>
No. 123, Jalan Semua Girl Satu Group, 54321 Mushroom Planet, Universe.
<br>
04-211999
@endcomponent
