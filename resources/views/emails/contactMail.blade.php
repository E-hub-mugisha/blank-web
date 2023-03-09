<x-mail::message>
# {{ $mailData['subject'] }},  

# It's {{ $mailData['name']}}

{{ $mailData['message']}}

Reach me on 
# {{ $mailData['phone'] }} or 
# {{ $mailData['email'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>