@props(['active' => false])

@php
            $Current = "bg-gray-950/50 text-white";
            $Default = "text-gray-300 hover:bg-white/5 hover:text-white";
            @endphp

            <a aria-current="page" class="rounded-md {{ $active ? $Current : $Default }}" {{ $attributes }}>
                {{ $slot }}
            </a>