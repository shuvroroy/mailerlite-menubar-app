<div>
    <h3 class="ml-4 text-xs font-normal leading-6 text-gray-500 uppercase dark:text-white">Last Sent Campaign</h3>
    <div class="w-full">
        <x-placeholder />
    </div>
    <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 p-4 shadow-sm mt-1">
        <div>
            <div class="text-center">
                <div class="flex justify-center mb-2">
                    <img class="h-28" src="{{ asset('images/screenshot-placeholder.svg') }}" alt="">
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-300">No campaign sent</p>
            </div>

            <div class="flex space-x-4">
                <div class="flex-shrink-0">
                    {{-- {{ $campaign['emails'][0]['screenshot_url'] }} --}}
                    <img src="{{ asset('images/screenshot-placeholder.svg') }}" class="h-16 rounded-md">
                </div>

                <div class="overflow-hidden">
                    {{-- {{ $campaign['name'] }} --}}
                    <h3 class="text-md font-semibold dark:text-white truncate">Sample Name</h3>
                    <div class="flex flex-col space-y-1">
                        {{-- {{ $campaign['type_for_humans'] }} --}}
                        <span class="text-xs text-gray-500 dark:text-gray-300">Regular</span>
                        {{-- {{ $campaign['finished_at'] }} --}}
                        <span class="text-xs text-gray-400 dark:text-gray-500">Sent 2023-10-22</span>
                    </div>
                </div>
            </div>
            <div class="mt-1 flex items-center justify-between">
                <span class="flex flex-col">
                    <span class="text-sm text-gray-600 dark:text-gray-200">Recipients</span>
                    {{-- {{ $campaign['stats']['sent'] }} --}}
                    <span class="text-center text-xs font-semibold dark:text-white">1</span>
                </span>
                <span class="flex flex-col">
                    <span class="text-sm text-gray-600 dark:text-gray-200">Opened</span>
                    {{-- {{ $campaign['stats']['open_rate']['string'] }} --}}
                    <span class="text-center text-xs font-semibold dark:text-white">0</span>
                </span>
                <span class="flex flex-col">
                    <span class="text-sm text-gray-600 dark:text-gray-200">Clicked</span>
                    {{-- {{ $campaign['stats']['click_rate']['string'] }} --}}
                    <span class="text-center text-xs font-semibold dark:text-white">0</span>
                </span>
                <span class="flex flex-col">
                    <span class="text-sm text-gray-600 dark:text-gray-200">CTOR</span>
                    {{-- {{ $campaign['stats']['click_to_open_rate']['string'] }} --}}
                    <span class="text-center text-xs font-semibold dark:text-white">0</span>
                </span>
            </div>
        </div>
    </div>
</div>
