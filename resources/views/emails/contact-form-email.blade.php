@component('mail::message')
    # Contact Form Submission

    From: {{ $contact['name'] }}

    Email: {{ $contact['email'] }}

    Message: {{ $contact['message'] }}

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
