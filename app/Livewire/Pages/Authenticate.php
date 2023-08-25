<?php

namespace App\Livewire\Pages;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Authenticate extends Component
{
    #[Rule(['required', 'string', 'max:1000'])]
    public string $token = '';

    public function verify(): void
    {
        $this->validate();

        try {
            Session::put('token', $this->token);

            Http::mailerlite()
                ->get('/user')
                ->throw();

            $this->redirectRoute('dashboard');

        } catch (\Exception) {
            Session::remove('token');

            $this->addError('token', 'Invalid token');
        }
    }

    public function render(): View
    {
        return view('livewire.pages.authenticate');
    }
}
