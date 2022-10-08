<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class CustomSelect extends Component
{
    const INPUT_FORMAT_CHECKBOX = 'checkbox';
    const INPUT_FORMAT_RADIO    = 'radio';

    const INPUT_FORMATS = [
        self::INPUT_FORMAT_CHECKBOX,
        self::INPUT_FORMAT_RADIO,
    ];

    public string $name;
    public array $values;
    public string $format;
    public string $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $values,
        $placeholder = 'Выбрать значение',
        $format = self::INPUT_FORMAT_CHECKBOX
    ) {
        $this->name        = $name;
        $this->values      = $values;
        $this->format      = in_array($format, self::INPUT_FORMATS) ? $format : self::INPUT_FORMAT_CHECKBOX;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.custom-select');
    }
}
