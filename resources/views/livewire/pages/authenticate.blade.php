<div class="flex min-h-full items-center justify-center px-4 py-8 sm:px-6 lg:px-8">
    <div class="w-full max-w-sm">
        <div class="mb-4">
            <img class="mx-auto h-10 w-auto dark:hidden" src="{{ asset('images/logo-light.svg') }}" alt="MailerLite">
            <img class="mx-auto h-10 w-auto hidden dark:block" src="{{ asset('images/logo-dark.svg') }}" alt="MailerLite">
            <h2 class="mt-4 text-center text-xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">Sign in to your account using API Token</h2>
        </div>

        <form wire:submit="verify" class="space-y-6">
            <div>
                <label for="token" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">API token</label>
                <div class="mt-2">
                    <textarea wire:model="token" rows="4" id="token" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6"></textarea>
                </div>

                @error('token')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="w-full inline-flex justify-center items-center px-4 py-2 font-semibold leading-6 text-sm shadow rounded-md text-white bg-green-500 hover:bg-green-400 focus:outline-0">
                    <svg wire:loading class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Sign in
                </button>
            </div>
        </form>
    </div>
</div>
