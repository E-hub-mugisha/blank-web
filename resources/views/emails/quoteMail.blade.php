<x-mail::message>
# {{ $mailData['service'] }},  

# It's {{ $mailData['names']}}

{{ $mailData['detail']}} and my is {{ $mailData['budget']}} business profile {{ $mailData['profile']}} 

Reach me on 
# {{ $mailData['phone'] }} or 
# {{ $mailData['email'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>