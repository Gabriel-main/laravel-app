@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'appearance-none block w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-sm transition-all']) }}>
