<div>
    <x-navbar />

    <main class="px-4 py-8 space-y-8 -mt-3">
        <livewire:components.last-sent-campaign />

        <div
            x-data="{
                tabSelected: 1,
                tabId: $id('tabs'),
                tabButtonClicked(tabButton){
                    this.tabSelected = tabButton.id.replace(this.tabId + '-', '');
                    this.tabRepositionMarker(tabButton);
                },
                tabRepositionMarker(tabButton){
                    this.$refs.tabMarker.style.width=tabButton.offsetWidth + 'px';
                    this.$refs.tabMarker.style.height=tabButton.offsetHeight + 'px';
                    this.$refs.tabMarker.style.left=tabButton.offsetLeft + 'px';
                }
            }"
            x-init="tabRepositionMarker($refs.tabButtons.firstElementChild);tabButtonClicked($refs.tabButtons.firstElementChild);"
            wire:ignore
        >
            <div x-ref="tabButtons" class="relative inline-grid items-center justify-center w-full h-10 grid-cols-3 p-1 text-gray-500 bg-gray-200 dark:bg-gray-800 dark:text-gray-200 rounded-md select-none">
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-xs font-medium transition-all rounded-md cursor-pointer whitespace-nowrap focus:outline-0">Last 30 days</button>
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-xs font-medium transition-all rounded-md cursor-pointer whitespace-nowrap focus:outline-0">Last 3 months</button>
                <button :id="$id(tabId)" @click="tabButtonClicked($el);" type="button" class="relative z-20 inline-flex items-center justify-center w-full h-8 px-3 text-xs font-medium transition-all rounded-md cursor-pointer whitespace-nowrap focus:outline-0">Last 6 months</button>
                <div x-ref="tabMarker" class="absolute left-0 z-10 w-1/2 h-full duration-300 ease-out" x-cloak>
                    <div class="w-full h-full bg-white dark:bg-gray-700 rounded-md shadow-sm"></div>
                </div>
            </div>
        </div>

        <div>
            <h3 class="ml-4 text-xs font-normal leading-6 text-gray-500 uppercase dark:text-white">Subscribers overview</h3>
            <div class="w-full">
                <x-placeholder />
            </div>

            <dl class="mt-1 grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 px-4 py-5 shadow-sm">
                    <dt class="truncate text-xs font-normal text-gray-600 dark:text-gray-200">Total active subscribers</dt>
                    {{-- {{ $data['active_unique_subscribers_count'] }} --}}
                    <dd class="mt-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">1</dd>
                </div>
                <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 px-4 py-5 shadow-sm">
                    <dt class="truncate text-xs font-normal text-gray-600 dark:text-gray-200">New subscribers today</dt>
                    {{-- {{ $data['subscribed_today'] }} --}}
                    <dd class="mt-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">0</dd>
                </div>
                <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 px-4 py-5 shadow-sm">
                    <dt class="truncate text-xs font-normal text-gray-600 dark:text-gray-200">New subscribers this month</dt>
                    {{-- {{ $data['subscribed_this_month'] }} --}}
                    <dd class="mt-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">0</dd>
                </div>
                <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 px-4 py-5 shadow-sm">
                    <dt class="truncate text-xs font-normal text-gray-600 dark:text-gray-200">New in last 2 months</dt>
                    {{-- {{ $data['total_subscribed'] }} --}}
                    <dd class="mt-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">0</dd>
                </div>
                <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 px-4 py-5 shadow-sm">
                    <dt class="truncate text-xs font-normal text-gray-600 dark:text-gray-200">Unsubscribers in last 2 months</dt>
                    {{-- {{ $data['total_unsubscribed'] }} --}}
                    <dd class="mt-1 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">0</dd>
                </div>
            </dl>
        </div>

        <div>
            <h3 class="ml-4 text-xs font-normal leading-6 text-gray-500 uppercase dark:text-white">Campaigns</h3>
            <div class="w-full">
                <x-placeholder />
            </div>

            <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 py-4 shadow-sm mt-1">
                <div class="px-4">
                    <h3 class="text-xs font-semibold leading-7 text-gray-900 dark:text-gray-200">Email sent</h3>
                    {{-- {{ $data['total_recipients_count'] }} --}}
                    <p class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">0</p>
                </div>
                <div class="mt-2 border-t border-gray-100 dark:border-gray-700">
                    <dl class="divide-y divide-gray-100 dark:divide-gray-700">
                        <div class="px-4 py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Opens</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['total_opens_count'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Clicks</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['total_clicks_count'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pt-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">CTOR</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['ctor'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <div>
            <h3 class="ml-4 text-xs font-normal leading-6 text-gray-500 uppercase dark:text-white">Automations</h3>
            <div class="w-full">
                <x-placeholder />
            </div>

            <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 py-4 shadow-sm mt-1">
                <div class="px-4">
                    <h3 class="text-xs font-semibold leading-7 text-gray-900 dark:text-gray-200">Active automation workflow</h3>
                    {{-- {{ $data['active_automations'] }} --}}
                    <p class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">0</p>
                </div>
                <div class="mt-2 border-t border-gray-100 dark:border-gray-700">
                    <dl class="divide-y divide-gray-100 dark:divide-gray-700">
                        <div class="px-4 py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Subscriber in the queue</h3>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['subscribes_in_automation_queues'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Completed subscribers</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['total_automation_runs_completed_count'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Email sent</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['total_automation_recipients_count'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pt-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Unsubscribed</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['total_automation_unsubscribes_count'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <div>
            <h3 class="ml-4 text-xs font-normal leading-6 text-gray-500 uppercase dark:text-white">Forms</h3>
            <div class="w-full">
                <x-placeholder />
            </div>

            <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 py-4 shadow-sm mt-1">
                <div class="px-4">
                    <h3 class="text-xs font-semibold leading-7 text-gray-900 dark:text-gray-200">All active forms</h3>
                    {{-- {{ $data['all_forms_counts']['all'] }} --}}
                    <p class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">0</p>
                </div>
                <div class="mt-2 border-t border-gray-100 dark:border-gray-700">
                    <dl class="divide-y divide-gray-100 dark:divide-gray-700">
                        <div class="px-4 py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Signups</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['form_totals']['all']['signups'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pt-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Avg. conversion rate</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['form_totals']['all']['conversion_rate'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <div>
            <h3 class="ml-4 text-xs font-normal leading-6 text-gray-500 uppercase dark:text-white">Sites</h3>
            <div class="w-full">
                <x-placeholder />
            </div>

            <div class="overflow-hidden rounded-md bg-white dark:bg-gray-800 py-4 shadow-sm mt-1">
                <div class="px-4">
                    <h3 class="text-xs font-semibold leading-7 text-gray-900 dark:text-gray-200">All published sites</h3>
                    {{-- {{ $data['all_sites_counts']['all'] }} --}}
                    <p class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">0</p>
                </div>
                <div class="mt-2 border-t border-gray-100 dark:border-gray-700">
                    <dl class="divide-y divide-gray-100 dark:divide-gray-700">
                        <div class="px-4 py-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Signups</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['site_totals']['all']['signups'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pt-4">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="text-sm font-medium leading-6 text-gray-900 dark:text-gray-200">Avg. conversion rate</h3>
                                    <h4 class="text-xs leading-6 text-gray-400 dark:text-gray-300">Last 2 months</h4>
                                </div>
                                <div class="flex-shrink-0">
                                    {{-- {{ $data['site_totals']['all']['conversion_rate'] }} --}}
                                    <span class="text-md font-semibold tracking-tight text-gray-400 dark:text-gray-300">0</span>
                                </div>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </main>
</div>
