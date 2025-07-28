<?php

namespace App\Livewire;

use App\Models\GameAccount;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        // dd(GameAccount::all()); // Example usage of GameAccount model
         return view('livewire.home')
            ->layout('components.layouts.guest')
            ->layoutData([
                // 'seo_setting'  => $this->seo_setting,
                // 'hero_section' => $this->hero_section,
                // 'feature_section' => $this->feature_section,
                // 'medicare_services' => $this->medicare_services,
            ]);
    }
}
