@props(['name', 'class' => 'w-5 h-5'])

<span {{ $attributes->merge(['class' => $class]) }}>
    @include("components.icons.{$name}")
</span>
