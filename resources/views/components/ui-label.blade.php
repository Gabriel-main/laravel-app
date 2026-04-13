@props(['value'])

<label
    {{ $attributes->merge(['class' => 'block text-[11px] font-black uppercase tracking-widest text-slate-400 mb-1 px-1']) }}>
    {{ $value ?? $slot }}
</label>
