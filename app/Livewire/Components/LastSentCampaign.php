<?php

namespace App\Livewire\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LastSentCampaign extends Component
{
    public function mount(): void
    {
        try {
            $response = Http::mailerlite()
                ->get('/campaigns?filter[status]=sent&limit=1&sort=-created_at')
                ->throw();

            $response->json()['data'][0];
        } catch (\Exception) {}
    }

    public function render(): View
    {
        return view('livewire.components.last-sent-campaign');
    }
}
