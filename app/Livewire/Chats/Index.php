<?php

namespace App\Livewire\Chats;

use Livewire\Component;

class Index extends Component
{
    protected $layout = 'components.layouts.app';

    public function render()
    {
        return view('livewire.chats.index');
    }
}
