<div>
    <div id="{!! $chartId !!}" style="height:100px"></div>
</div>

@push('custom_script')
    <script>
        // var selectedChartType = {!! $chartType !!};
        (function() {
            // if(selectedChartType != 'donut' || selectedChartType != 'pie'){
            const options = {
                series: {!!$series!!},
                chart: {
                    id: `{!! $chartId !!}`,
                    type: `{!! $chartType !!}`,
                    // height: 350,
                },
            stroke: {
                    show: true,
                    width: [1, 4]
                    // colors: ['#333']
                    },

                dataLabels: {
                    enabled: true,
                    borderRadius: 10,
                    horizontal: false,
                    columnWidth: '50%',
                    orientation: 'vertical',

                    formatter: function(val, opts) {
                        return formatCurrency(val)
                    },
                    style: {
                        // colors: ['#333']
//                         colors: []
                    },
                },
                 tooltip: {
          shared: true,
          intersect: false
        },
                plotOptions: {
                    bar: {
                        barHeight: '100%',
                        distributed: true,
                        dataLabels: {
                            orientation: 'vertical',
                            // position: 'center',


                        },

                    },

                },
                xaxis: {
                    type: 'category',
                    categories: {!! $categories !!}
                },
                yaxis: [{
                    title: {
                        text: `TV`,
                    },
                    labels: {
                        formatter: function(value) {
                            return simplifyNumber(value)
                        },
            //             style: {
            //     colors: '#008FFB',
            //   }
                    }

                },
                {
                    opposite: true,
                    title: {
                        text: "Count",
                    },
                    labels: {
                        formatter: function(value) {
                            return simplifyNumber(value)
                        },
            //              style: {
            //     colors: '#FEB019',
            //   },
                    }
                }],
                grid: {
                    row: {
                        colors: ['#fff', '#f2f2f2']
                    }
                },

            }

            const chart = new ApexCharts(document.getElementById(`{!! $chartId !!}`), options);
            // chart.height="30%"
            chart.render();
            // document.addEventListener('livewire:load', () => {
            //     @this.on(`refreshChartData-{!! $chartId !!}`, (chartData) => {
            //         // console.log(chartData)
            //         chart.updateOptions({
            //             xaxis: {
            //                 categories: chartData.categories
            //             }
            //         });
            //         chart.updateSeries([{
            //             data: chartData.seriesData,
            //             name: chartData.seriesName,
            //         }]);
            //     });
            // });
        }());
    </script>
@endpush
