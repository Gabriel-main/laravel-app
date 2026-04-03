<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full flex justify-center py-3 px-2 border border-transparent rounded-xl shadow-sm text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 transform active:scale-[0.98]']) }}>
    {{ $slot }}
</button>
