@props(['disabled' => false])

<div class="w-full">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' =>
            'block w-full rounded-2xl border-slate-200 bg-slate-50/50 px-4 py-3 text-sm font-semibold text-slate-700 transition-all placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10 disabled:opacity-50',
    ]) !!}>
</div>
