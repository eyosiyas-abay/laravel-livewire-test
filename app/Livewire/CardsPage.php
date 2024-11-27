<?php

namespace App\Livewire;

use Livewire\Component;

class CardsPage extends Component
{
    public $cards = [
        ['images' => [
            '/images/image_1.png', 'images/image_2.png'
        ], 'title' => 'Photography', 'bullet_points' => [
            'Drone Photography', 'Interiors', 'Exteriors / Architectural'
        ], 'description' => 'Every photograph we produce finds the beauty in your property while serving as a profitable asset.'],
        ['images' => [
            'images/image_3.png'
        ], 'title' => 'Virtual Staging', 'bullet_points' => [], 'description' => 'Our staging will help you sell the potential of your space.
        We can work off of our own photography or photos you provide.'],
        ['images' => [
            'images/image_4.png'
        ], 'title' => 'Renderings', 'bullet_points' => [
            'Interiors ', 'Exteriors'
        ], 'description' => 'Renderings are the gold standard in pre-construction marketing.'],
        ['images' => [
            'images/image_5.png'
        ], 'title' => 'Interactive Tours', 'bullet_points' => [
            'Matterport', 'Video Walkthroughs'
        ], 'description' => 'Give your audience the ability to explore your property without requiring in-person travel.'],
        ['images' => [
            'images/image_6.png'
        ], 'title' => 'Floor Plans', 'bullet_points' => [
            'On-site Measure', '2D Floor Plans', '3D Floor Plans'
        ], 'description' => 'We produce laser-precise floor plans faster than any other service.'],
        ['images' => [
            'images/image_7.png'
        ], 'title' => 'Video', 'bullet_points' => [
            'Drone Cinematography', 'Interiors', 'Exteriors / Architectural'
        ], 'description' => 'Video content has higher engagement and will help your property stand out online.'],
    ];

    public function render()
    {
        return view('livewire.cards-page')->layout('layouts.app');
    }
}
