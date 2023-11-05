<?php

namespace App\View\Components\Jambasangsang;

use Illuminate\View\Component;

class SearchBox extends Component
{
    public $type = '';
    public $name = '';
    public $id = '';
    public $class = '';
    public $placeholder;

    public function __construct($name, $id = null, $class = null, $type = null, $placeholder = null)
    {
        $this->type  = $type;
        $this->name  = $name;
        $this->id    = $id;
        $this->class = $class;
        $this->placeholder = $placeholder;
    }

    public function render()
    {

        if ($this->type == '') {
            $this->type = 'search';
        }

        if ($this->placeholder == '') {
            $this->placeholder = 'search ....';
        }

        if ($this->class == '') {
            $this->class = 'px-2 py-1 border rounded focus:outline-non';
        }

        if ($this->name == '') {
            $this->name = 'search';
        }

        if ($this->id == '') {
            $this->id = 'search';
        }

        return view('components.jambasangsang.search-box');
    }
}
