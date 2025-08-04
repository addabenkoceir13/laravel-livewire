<?php

namespace App\Livewire;

use Livewire\Component;

class Lazy extends Component
{
    public function mount()
    {
        sleep(1);
    }

    public function placeholder()
    {
        return <<<'HTML'
            <div class="text-center">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        HTML;
    }
    public function render()
    {
        return view('livewire.lazy');
    }
}
