
@php
    $classes = "text-xs text-gray-500 hover:text-gray-900"
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}
    href="{{ route('password.request') }}">
    {{ $slot }}
</a>
