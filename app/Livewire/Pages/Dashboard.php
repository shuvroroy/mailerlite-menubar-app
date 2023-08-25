<?php

namespace App\Livewire\Pages;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Dashboard extends Component
{
    public int $selectedTab = 1;

    public array $data = [];

    #[On('refresh-data')]
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

            $this->data = $response->json();
        } catch (\Exception) {
            Session::remove('token');

            $this->redirectRoute('authenticate');
        }
    }

    #[On('sign-out')]
    public function signout(): void
    {
        Session::remove('token');

        $this->redirectRoute('authenticate');
    }

    #[Computed]
    public function label(): string
    {
        return match($this->selectedTab) {
            2 => '3 months',
            3 => '6 months',
            default => '30 days'
        };
    }

    public function getTimeFrameForSelectedTab(): string
    {
        return match($this->selectedTab) {
            2 => 'three_months',
            3 => 'six_months',
            default => 'month'
        };
    }

    public function getDaysForSelectedTab(): int
    {
        return match($this->selectedTab) {
            2 => 90,
            3 => 180,
            default => 0
        };
    }

    public function render(): View
    {
        return view('livewire.pages.dashboard');
    }
}
