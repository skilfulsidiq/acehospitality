<?php

namespace App\View\Components\Charts;

use Illuminate\View\Component;

class PieChart extends Component
{

    public  $chartId;
    public $seriesData;
    public $categories;
    public $seriesName;
    public $chartType;

    public $yname;

    public function __construct($chartId, $seriesData, $categories,$chartType="", $seriesName = '',$yname="")
    {

        $this->chartId = $chartId;
        // $this->seriesData = $seriesData;
        // $this->categories = $categories;
        $this->seriesData = json_encode($seriesData);
        $this->categories = json_encode($categories);
        $this->seriesName = $seriesName ?? 'Series';
        $this->chartType = $chartType??'donut';
        $this->yname = $yname??"Value";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.charts.pie-chart');
    }
}
