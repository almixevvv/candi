<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ImageCarousel extends Component
{
    public array $images;
    public int $imageActive = 0;

    public function mount(array $images) 
    {
        $this->images = $images;
    }

    public function next() 
    {
        $this->imageActive += 1;
        if ($this->imageActive >= count($this->images)) {
            $this->imageActive = 0;
        }
    }

    public function previous() 
    {
        $this->imageActive -= 1;
        if ($this->imageActive < 0) {
            $this->imageActive = count($this->images) - 1;
        }
    }

    public function chooseImage($key) 
    {
        $this->imageActive = $key;
    }

    public function render()
    {
        return view('livewire.image-carousel');
    }
}
