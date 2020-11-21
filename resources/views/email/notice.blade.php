@component('mail::message')
# Hello,

A new message has been received through the Contact Us form.

The details of the message are as follows:

@component('mail::table')
| Type          | Details                   |
| ------------- |:-------------------------:|
| Name          | {{ $message->name }}      |
| Email         | {{ $message->email }}     |
| Message       | {{ $message->message }}   |
@endcomponent

An acknowledgement mail has been sent as a reply, pending when this enquiry will be attended to.

Thanks,<br>

{{ config('app.name') }}
@endcomponent
