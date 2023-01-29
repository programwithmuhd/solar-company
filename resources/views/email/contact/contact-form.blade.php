<x-mail::message>
<h1>{{ config('app.name') }}</h1>
# Thank you for your message

<p><strong>Email:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Email:</strong> {{ $data['contact'] }}</p>

<strong>Message</strong>
{{ $data['message'] }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
<p>{{ $data['name'] }}</p>
</x-mail::message>
