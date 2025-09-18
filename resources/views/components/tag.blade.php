@props(['size' => 'base'])

@php
  $classes = 'font-bold mr-1 bg-white/10 hover:bg-white/25 rounded-xl transition-colors duration-300';

  if ($size === 'base') {
    $classes .= " px-5 py-1 text-sm";
  } elseif ($size === 'small') {
    $classes .= " px-2 py-1 text-xs";
  }

@endphp

<a href="#" class="{{ $classes }}">
  {{ $slot }}
</a>