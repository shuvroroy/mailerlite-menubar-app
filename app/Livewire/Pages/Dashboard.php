<?php

namespace App\Livewire\Pages;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Dashboard extends Component
{
    public function fetchData(): void
    {
        try {
            $response = Http::mailerlite()
                ->get('/performance/time-frame-stats', [
                    'time_frame' => $this->getTimeFrameForSelectedTab(),
                    'time_frame_start' => now()->format('Y-m-d'),
                    'time_frame_end' => now()->addDays($this->getDaysForSelectedTab())->format('Y-m-d'),
                    'include_previous' => 0
                ])
                ->throw();

            $response->json();
        } catch (\Exception) {

        }
    }

    public function label(): string
    {
        // 2 => '3 months'
        // 3 => '6 months'
        // default => '30 days'
        return '';
    }

    public function getTimeFrameForSelectedTab(): string
    {
        // 2 => 'three_months'
        // 3 => 'six_months'
        // default => 'month'
        return '';
    }

    public function getDaysForSelectedTab(): int
    {
        // 2 => 90
        // 3 => 180
        // default => 0
        return 0;
    }

    public function render(): View
    {
        return view('livewire.pages.dashboard');
    }
}
