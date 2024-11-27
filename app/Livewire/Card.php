<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $images;
    public $title;
    public $bullet_points;
    public $description;

    public function render()
    {
        return view('livewire.card');
    }
}
