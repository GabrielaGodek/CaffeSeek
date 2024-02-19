<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Feature extends Component
{
    public $value;
    public $description;

    public function __construct($value, $description)
    {
        $this->value = $value;
        $this->description = $description;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.feature');
    }
}
