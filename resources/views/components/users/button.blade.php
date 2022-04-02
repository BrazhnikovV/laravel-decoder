@props(['color','ml'])

<button {{ $attributes->merge(['type' => 'submit', 'title' => 'Remove user', 'class' => "inline-flex items-center px-2 py-2 bg-$color-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-$color-700 active:bg-$color-900 focus:outline-none focus:border-$color-900 focus:ring ring-$color-300 disabled:opacity-25 transition ease-in-out duration-150 $ml"]) }}>
    {{ $slot }}
</button>
