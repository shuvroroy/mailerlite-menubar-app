<?php

namespace App\Livewire\Pages;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Authenticate extends Component
{
    public function verify(): void
    {
        try {
            Http::mailerlite()
                ->get('/user')
                ->throw();

        } catch (\Exception) {}
    }

    public function render(): View
    {
        return view('livewire.pages.authenticate');
    }
}
