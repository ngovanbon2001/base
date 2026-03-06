@props(['title'])

<div class="bg-white border border-gray-200 rounded-sm mb-4">
    <div class="bg-black text-white text-xs font-bold py-2 px-3 uppercase tracking-wider">
        {{ $title }}
    </div>
    <div class="p-2">
        {{ $slot }}
    </div>
</div>
