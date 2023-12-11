<div>
    <div id="{!! $chartId !!}" style="height:100px"></div>
</div>

@push('custom_script')

<script>
    (function () {
        const options = {
            chart: {
                id: `{!! $chartId !!}`,
                type: `{!!$chartType!!}`,
                // colors: ['#333']
                height:300
            },

             dataLabels: {
                       enabled: false,
                            borderRadius: 5,
                            horizontal: false,
                            columnWidth: '0%',
                            // orientation: 'vertical',
                            formatter: function(val, opts) {
                                return formatCurrency(val)
                            },
                            style: {
                                // colors: ['#333']
                                // colors: ['#333','#ff8300']
                            },
                    },
            plotOptions: {
                bar: {
                    barHeight: '100%',
                    distributed: true,
                     dataLabels: {
                            orientation: 'vertical',
                            // position: 'bottom',


                    },

                },


            },
            xaxis: {
                type: 'category',
                categories: {!! $categories !!}
            },

            yaxis: {
                  title: {
                        text: `{!! $yname !!}`,
                    },
                labels: {
                    formatter:
                    function(value) {
                    return simplifyNumber(value)
                    }
                }
                },
             grid: {
                row: {
                    colors: ['#fff', '#f2f2f2']
                }
            },
            series: [{
                name: `{!! $seriesName !!}`,
                data: {!! $seriesData !!}
            }],
            // colors: ['#5c6ac4', '#007ace'],
        }
    // }else{
    //     const options = {
    //          chart: {
    //             id: `{!! $chartId !!}`,
    //             type: `{!!$chartType!!}`
    //         },
    //         series: {!! $seriesData !!},
    //          labels: {!! $categories !!}

    //     }
    // }
        const chart = new ApexCharts(document.getElementById(`{!! $chartId !!}`), options);
        // chart.height="30%"
        chart.render();
        document.addEventListener('livewire:load', () => {
            @this.on(`refreshChartData-{!! $chartId !!}`, (chartData) => {
                // console.log(chartData)
                chart.updateOptions({
                    xaxis: {
                        categories: chartData.categories
                    }
                });
                chart.updateSeries([{
                    data: chartData.seriesData,
                    name: chartData.seriesName,
                }]);
            });
        });
            }());

</script>
@endpush
