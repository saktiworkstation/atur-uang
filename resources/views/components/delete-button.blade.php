@props(['message'])

<button
    {{ $attributes->merge(['class' => 'mt-1 inline-flex items-center px-3 py-1 bg-rose-600 border border-transparent rounded-md font-medium text-xs text-white uppercase tracking-widest hover:bg-rose-500 focus:bg-rose-500 active:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}
    onclick="return confirm('Are you sure want to delete {{ $message }}?')">
    {{ $slot }}
</button>
