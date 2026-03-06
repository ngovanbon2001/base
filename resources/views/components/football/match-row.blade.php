@props(['time', 'home', 'away', 'score' => '?', 'odds' => []])

<div class="grid grid-cols-12 gap-2 items-center py-3 px-2 border-b border-gray-100 hover:bg-orange-50/30 transition-colors">
    <!-- Thời gian & Trạng thái -->
    <div class="col-span-2 md:col-span-1 text-[11px] text-gray-500">
        <div>{{ $time }}</div>
        <div class="text-orange-600 font-medium">Live</div>
    </div>

    <!-- Thông tin 2 đội -->
    <div class="col-span-5 md:col-span-5 flex flex-col gap-1">
        <div class="flex justify-between items-center pr-4">
            <span class="text-sm font-semibold text-gray-800">{{ $home }}</span>
            <span class="text-xs font-bold">{{ explode('-', $score)[0] ?? 0 }}</span>
        </div>
        <div class="flex justify-between items-center pr-4">
            <span class="text-sm font-semibold text-gray-800">{{ $away }}</span>
            <span class="text-xs font-bold">{{ explode('-', $score)[1] ?? 0 }}</span>
        </div>
    </div>

    <!-- Nhóm Odds (Dùng component odds-cell ở trên) -->
    <div class="col-span-5 md:col-span-6 flex gap-1 justify-end">
        <x-football.odds-cell label="1" :value="$odds['1'] ?? 0" />
        <x-football.odds-cell label="X" :value="$odds['x'] ?? 0" />
        <x-football.odds-cell label="2" :value="$odds['2'] ?? 0" />

        {{-- Nút xem chi tiết --}}
        <div class="hidden md:flex items-center ml-2">
            <button class="bg-gray-100 p-2 rounded hover:bg-gray-200">
                📊
            </button>
        </div>
    </div>
</div>
