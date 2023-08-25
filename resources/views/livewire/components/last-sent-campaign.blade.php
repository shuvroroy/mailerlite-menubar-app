<div wire:poll.1000s>
    <h3 class="ml-4 text-xs font-normal leading-6 text-gray-500 uppercase dark:text-white">Last Sent Campaign</h3>
    <div wire:loading class="w-full">
        <x-placeholder />
    </div>

    <div wire:loading.remove class="overflow-hidden rounded-md bg-white dark:bg-gray-800 p-4 shadow-sm mt-1">
        <div>
            @if (blank($campaign))
                <div class="text-center">
                    <div class="flex justify-center mb-2">
                        <img class="h-28" src="{{ asset('images/screenshot-placeholder.svg') }}" alt="">
                    </div>
                    <p class="text-sm text-gray-500 dark:text-gray-300">No campaign sent</p>
                </div>
            @else
                <div class="flex space-x-4">
                    <div class="flex-shrink-0">
                        <img src="{{ $campaign['emails'][0]['screenshot_url'] }}" class="h-16 rounded-md">
                    </div>

                    <div class="overflow-hidden">
                        <h3 class="text-md font-semibold dark:text-white truncate">{{ $campaign['name'] }}</h3>
                        <div class="flex flex-col space-y-1">
                            <span class="text-xs text-gray-500 dark:text-gray-300">{{ $campaign['type_for_humans'] }}</span>
                            <span class="text-xs text-gray-400 dark:text-gray-500">Sent {{ $campaign['finished_at'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="mt-1 flex items-center justify-between">
                    <span class="flex flex-col">
                        <span class="text-sm text-gray-600 dark:text-gray-200">Recipients</span>
                        <span class="text-center text-xs font-semibold dark:text-white">{{ $campaign['stats']['sent'] }}</span>
                    </span>
                    <span class="flex flex-col">
                        <span class="text-sm text-gray-600 dark:text-gray-200">Opened</span>
                        <span class="text-center text-xs font-semibold dark:text-white">{{ $campaign['stats']['open_rate']['string'] }}</span>
                    </span>
                    <span class="flex flex-col">
                        <span class="text-sm text-gray-600 dark:text-gray-200">Clicked</span>
                        <span class="text-center text-xs font-semibold dark:text-white">{{ $campaign['stats']['click_rate']['string'] }}</span>
                    </span>
                    <span class="flex flex-col">
                        <span class="text-sm text-gray-600 dark:text-gray-200">CTOR</span>
                        <span class="text-center text-xs font-semibold dark:text-white">{{ $campaign['stats']['click_to_open_rate']['string'] }}</span>
                    </span>
                </div>
            @endif
        </div>
    </div>
</div>
