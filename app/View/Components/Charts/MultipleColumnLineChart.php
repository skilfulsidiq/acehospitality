<?php

namespace App\View\Components\Charts;

use Illuminate\View\Component;

class MultipleColumnLineChart extends Component
{
    public  $chartId;
    public $series;
    public $categories;
    public $chartType;

    public function __construct($chartId, $series, $categories, $chartType = "")
    {

        $this->chartId = $chartId;
        $this->series = json_encode($series);
        $this->categories = json_encode($categories);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.charts.multiple-column-line-chart');
    }
}
