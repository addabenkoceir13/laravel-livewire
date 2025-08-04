<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BirdForm extends Component
{
    #[Validate('required', 'integer', 'min:1')]
    public int $count = 0;
    #[Validate('required', 'string', 'max:255')]
    public string $notes = '';

    public function submit()
    {
        // dd($this->count, $this->notes); // Debugging line to check values
        $this->validate();
        Entry::create([
            'count' => $this->count,
            'notes' => $this->notes,
        ]);

        $this->reset();
    }

    public function mount($count = 0)
    {
        // Initialize any properties if needed
        $this->count = $count;
        // $this->notes = 'test notes 250';

        // $this->entries = Entry::all();
    }

    public function deleteEntry($id)
    {
        Entry::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.bird-form', ['entries' => Entry::all()]);
    }
}
