<?php

namespace App\View\Components\Jambasangsang;

use Illuminate\View\Component;

class Image extends Component
{
    public $alt;
    public $class;
    public $height;
    public $width;
    public $size;
    public $src;
    public $style;


    public function __construct($alt = null, $style = null, $class = null, $height = null, $width = null, $size = null, $src = null)
    {
        $this->alt = $alt;
        $this->class = $class;
        $this->height = $height;
        $this->width = $width;
        $this->size = $size;
        $this->src = $src;
        $this->style = $style;
    }


    public function render()
    {
        return view('components.jambasangsang.image');
    }
}
