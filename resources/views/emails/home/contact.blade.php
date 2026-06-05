@component('mail::message')
# New Lead

**Name:** {{ $data['name'] }}<br>
**Email:** {{ $data['email'] }}<br>
**Phone:** {{ $data['phone'] }}<br>
**Product:** {{ $data['product']??'--' }}<br>
**Company:** {{ $data['company'] }}<br>
**Country:** {{ $data['country'] }}

@if(!empty($data['message']))
---

### Message
{{ $data['message'] }}
@endif

@component('mail::button', ['url' => 'mailto:' . $data['email']])
Reply to Client
@endcomponent

Thanks,
@endcomponent
