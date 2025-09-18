@props(['size' => 'base'])

@php
  $classes = 'inline-block filter invert';

  if ($size === 'base') {
    $classes .= " w-8 h-8";
  } elseif ($size === 'small') {
    $classes .= " w-4 h-4";
  }
@endphp

<div class="inline-flex items-center gap-3">
    
    <img src="{{ Vite::asset('resources\\images\\image.svg') }}" alt="" class="{{ $classes }}">

    <h3 class="text-lg font-bold">
        {{ $slot }}
    </h3>
</div>


