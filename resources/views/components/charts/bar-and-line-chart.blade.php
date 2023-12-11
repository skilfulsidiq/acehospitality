<div>
    <div id="{!! $chartId !!}" style="height:100px"></div>
</div>

@push('custom_script')
    <script>

        // var selectedChartType = {!! $chartType !!};
        //    colors:['#F44336', '#E91E63', '#9C27B0'],
        (function() {
            // if(selectedChartType != 'donut' || selectedChartType != 'pie'){
            const options = {
                series: {!! $seriesDataOne !!},
                chart: {
                    id: `{!! $chartId !!}`,
                    // type: `{!! $chartType !!}`,
                    height: 300,
                },

                stroke: {
                    show: true,
                    width: 1
                },
                 markers: {
                size: 5,

                hover: {
                size: 10,
                sizeOffset: 3
                },

                dataLabels: {
                    enabled: false,
                    borderRadius: 10,
                    horizontal: false,
                    columnWidth: '50%',
                    orientation: 'vertical',

                    formatter: function(val, opts) {
                        return formatCurrency(val)
                    },
                    style: {},
                },
                tooltip: {
                    shared: true,
                    intersect: false
                },
                plotOptions: {

                    bar: {
                        barHeight: '20%',
                        distributed: false,
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
                yaxis: [
                    {
                        forceNiceScale:true,
                        min:100000,
                        tickAmount: 6,
                        opposite: true,
                        title: {
                             text: `{!! $xname !!}`,
                        },
                        labels: {
                            formatter: function(value) {
                                return simplifyNumber(value)
                            },

                        }
                    },
                    {
                        forceNiceScale:true,
                        min:100000,
                        tickAmount: 6,
                        title: {
                            text: `{!! $yname !!}`,
                        },
                        labels: {
                            formatter: function(value) {
                                return simplifyNumber(value)
                            },

                        }

                    },
                ],
                grid: {
                    row: {
                        colors: ['#fff', '#f2f2f2']
                    }
                },

            }

            const chart = new ApexCharts(document.getElementById(`{!! $chartId !!}`), options);
            // chart.height="30%"
            chart.render();
            document.addEventListener('livewire:load', () => {
                @this.on(`refreshChartData-{!! $chartId !!}`, (chartData) => {
                    console.log(chartData)
                    chart.updateOptions({
                        xaxis: {
                            categories: chartData.categories
                        }
                    });
                    chart.updateSeries(chartData.seriesData);
                });
            });
        }());
    </script>
@endpush


{{-- [{
                    name: `{!! $seriesNameOne !!}`,
                    type: 'column',
                    data: {!! $seriesDataOne !!}
                }, {
                    name: `{!! $seriesNameTwo !!}`,
                    type: 'line',
                    data: {!! $seriesDataTwo !!}
                }] --}}
