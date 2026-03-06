@props(['country' => 'England', 'league' => 'Premier League', 'icon' => ''])

<div class="flex items-center justify-between bg-[#f2f2f2] border-l-4 border-orange-500 px-3 py-2 my-2">
    <div class="flex items-center gap-2">
        @if($icon)
            <img src="{{ $icon }}" class="w-5 h-5 object-contain" alt="{{ $country }}">
        @else
            <span class="text-lg">⚽</span>
        @endif
        <h3 class="font-bold text-sm uppercase text-gray-800">
            <span class="text-gray-500">{{ $country }}:</span> {{ $league }}
        </h3>
    </div>
    <div class="text-xs text-gray-500 cursor-pointer hover:underline">
        View Standings >
    </div>
</div>
