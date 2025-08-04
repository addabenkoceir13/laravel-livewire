<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Bookmarks extends Component
{
    public string $name = '';
    public string $url = '';
    public function save()
    {
        Auth::user()->bookmarks()->create([
            'name' => $this->name,
            'url' => $this->url,
        ]);
    }

    public function mount()
    {
        Auth::loginUsingId(1);
    }

    public function delete($id)
    {
        Auth::user()->bookmarks()->find($id)->delete();
    }
    public function render()
    {
        return view('livewire.bookmarks');
    }
}
