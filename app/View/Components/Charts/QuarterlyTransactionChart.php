<?php

namespace App\View\Components\Charts;

use Illuminate\View\Component;

class QuarterlyTransactionChart extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $chartId="quarterly_transaction_yr";
    public $data;
    public $labels;
    public $chartType;
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.charts.quarterly-transaction-chart');
    }
}
