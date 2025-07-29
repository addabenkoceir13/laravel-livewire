<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;
    public int $number = 0;


    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
    public function resetZero()
    {
        $this->count = 0;
    }

    public function alert()
    {
        $this->dispatch('alert', ['message' => 'Counter updated!']);
    }

    public function changeCount(int $number)
    {
        $this->count = $number;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
