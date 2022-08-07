<?php

namespace App\View\Components\Dashboard;

use Illuminate\View\Component;

class Container extends Component
{

    const CONTAINER_SIZE_FLUID = 1;
    const CONTAINER_SIZE_FIXED = 2;
    const CONTAINER_SIZE_SMALL = 3;

    const CONTAINERS_SIZES = [
        self::CONTAINER_SIZE_FLUID,
        self::CONTAINER_SIZE_FIXED,
        self::CONTAINER_SIZE_SMALL,
    ];

    const CONTAINER_SIZE_CLASSES = [
        self::CONTAINER_SIZE_FLUID => 'container-fluid',
        self::CONTAINER_SIZE_FIXED => 'container-fixed-large',
        self::CONTAINER_SIZE_SMALL => 'container-fixed-small',
    ];

    public string $containerClass = 'container-fluid';
    public string $containerFixedClass = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($containerSize = '', $fixedToCenter = null)
    {
        if (in_array($containerSize, self::CONTAINERS_SIZES)){
            $this->containerClass = self::CONTAINER_SIZE_CLASSES[$containerSize];
        }

        if ($fixedToCenter){
            $this->containerFixedClass = 'container-fixed-centered';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.container');
    }
}
