<?php

namespace App\Livewire\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LastSentCampaign extends Component
{
    public array $campaign = [];

    public function mount(): void
    {
        try {
            $response = Http::mailerlite()
                ->get('/campaigns?filter[status]=sent&limit=1&sort=-created_at')
                ->throw();

            $this->campaign = $response->json()['data'][0];
        } catch (\Exception) {
            Session::remove('token');

            $this->redirectRoute('authenticate');
        }
    }

    public function render(): View
    {
        return view('livewire.components.last-sent-campaign');
    }
}
