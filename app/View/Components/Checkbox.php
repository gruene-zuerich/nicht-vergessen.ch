<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public string $name;
    public string $label;
    public string $value;
    public string $helper;
    public bool $checked;
    public string $accentColor;
    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $label, string $value, string $helper = '', bool $checked = false, string $accentColor = 'magenta' )
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->helper = $helper;
        $this->checked = $checked;
        $this->accentColor = $accentColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.checkbox');
    }
}
