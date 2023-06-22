<?php

namespace App\View\Components\layouts\partials\frontend;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class head extends Component
{
    public $title;
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.partials.frontend.head');
    }
}
