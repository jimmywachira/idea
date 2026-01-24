<x-mail::message>
#Introduction

{{-- The body of your message. --}}
idea posted on our wall

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
