<?php

namespace App\View\Components\Jambasangsang;

use Illuminate\View\Component;

class SelectBox extends Component
{
    public $name;
    public $class;
    public $wire;


    public function __construct($name = null, $class = null, $wire = null)
    {
        $this->name = $name;
        $this->class = $class;
        $this->wire = $wire;
    }

    public function render()
    {
        return view('components.jambasangsang.select-box');
    }
}
