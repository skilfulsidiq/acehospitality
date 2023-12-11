<div>
    <div id="{!! $chartId !!}" ></div>
</div>

@push('custom_script')

<script>
    (function () {
         var options = {
          series:  {!! $seriesData !!},
          chart: {
             id: `{!! $chartId !!}`,
          width: 400,
           type: `{!!$chartType!!}`
        },
        labels:  {!! $categories !!},

        plotOptions: {
          pie: {
            startAngle: -90,
            endAngle: 270
          }
        },
        dataLabels: {
          enabled: true
        },
        fill: {
          type: 'gradient',
        },
        legend: {
             position: 'bottom'
        //   formatter: function(val, opts) {
        //     return val + " - " + opts.w.globals.series[opts.seriesIndex]
        //   }
        },
        // title: {
        //   text: 'Gradient Donut with custom Start-angle'
        // },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 300
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        const chart = new ApexCharts(document.getElementById(`{!! $chartId !!}`), options);
        // chart.height="30%"
        chart.render();
        document.addEventListener('livewire:load', () => {

            @this.on(`refreshChartData-{!! $chartId !!}`, (chartData) => {
                console.log(chartData)
                chart.updateOptions({
                    // xaxis: {
                    //     categories: chartData.categories
                    // }
                });
                chart.updateSeries(chartData.seriesData,
                    // name: chartData.seriesName,
                );
                // chart.updateSeries([{
                //     data: chartData.seriesData,
                //     // name: chartData.seriesName,
                // }]);
            });
        });
            }());

</script>
@endpush
