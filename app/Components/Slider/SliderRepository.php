<?php 

namespace App\Components\Slider;

use App\Slider;

class SliderRepository
{
    public function getAll()
    {
        return Slider::all();
    }

    public function getActive()
    {
    }
}
