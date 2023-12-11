<?php

namespace App\View\Components\Charts;

use Illuminate\View\Component;

class BarAndLineChart extends Component
{
    public  $chartId;
    public $seriesDataOne;
    // public $seriesDataTwo;
    public $categories;
    public $seriesNameOne;
    public $mainSeries;
    public $seriesNameTwo;
    public $chartType;

    public $width;

    public $yname;
    public $xname;
    public $colors;
    public function __construct($chartId, $seriesDataOne,$categories,$chartType="", $colors=[], $seriesNameOne = '',$seriesNameTwo="",  $yname="",$xname="",$width=[])
    {
        $this->width = (!empty($width))?json_encode($width):json_encode([1,1,1]);
        $this->chartId = $chartId;
        // $this->seriesData = $seriesData;
        // $this->categories = $categories;
        $this->seriesDataOne = json_encode($seriesDataOne);
        // $this->seriesDataTwo = json_encode($seriesDataTwo);
        $this->categories = json_encode($categories);
        $this->seriesNameOne = $seriesNameOne ?? 'Series';
        $this->seriesNameTwo = $seriesNameTwo ?? 'Series Two';
        $this->chartType = $chartType??'bar';
        $this->yname = $yname??"Value";
        $this->xname = $xname??"Count";
        $this->colors = $colors??[];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.charts.bar-and-line-chart');
    }
}
