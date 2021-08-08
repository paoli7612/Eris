<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tool extends Component
{
    public $title;
    public $link;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $link, $icon)
    {
        $this->title = $title;
        $this->link = $link;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tool');
    }
}
