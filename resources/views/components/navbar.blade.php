<nav class="flex justify-between items-center px-4 h-16 border-b border-gray-900/10 dark:border-gray-700">
    <div>
        <img class="h-8 w-auto dark:hidden" src="{{ asset('images/logo-light.svg') }}" alt="MailerLite">
        <img class="h-8 w-auto hidden dark:block" src="{{ asset('images/logo-dark.svg') }}" alt="MailerLite">
    </div>
    <div x-data="{ open: false }" @click.away="open = false" class="relative">
        <a href="#" @click="open = !open" class="-m-1.5 p-1.5">
            <span class="sr-only">Your profile</span>
            <img class="h-8 w-8 rounded-md" src="{{ asset('images/user-default.webp') }}" alt="">
        </a>
        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="origin-top-right absolute right-0 -mt-5 w-36 rounded-md shadow-lg"
        >
            <div class="rounded-md bg-white dark:bg-gray-800 shadow-xs overflow-hidden py-1">
                <a href="#" class="block p-2 text-xs text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-600">Your Profile</a>
                <a href="#" wire:click="$dispatch('sign-out')" class="block p-2 text-xs text-gray-700 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-600">Sign out</a>
            </div>
        </div>
    </div>
</nav>
