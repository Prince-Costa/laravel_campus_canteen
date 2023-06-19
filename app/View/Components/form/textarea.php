<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{
    public $label = null;
    public $name = null;
    public $type = null;
    public function __construct($label, $name, $type)
    {
        $this->label = $label;
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.textarea');
    }
}
