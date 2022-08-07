<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class ErrorBox extends Component
{
    public array $errors = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($errors = [])
    {
        $this->errors = $errors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.error-box');
    }
}
