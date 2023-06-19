<?php

namespace App\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class checkbox extends Component
{
   public $label = null;
   public $name = null;
   public $checked = null;
    public function __construct($label, $name, $checked)
    {
        $this->label = $label;
        $this->name = $name;
        $this->checked = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.checkbox');
    }
}
