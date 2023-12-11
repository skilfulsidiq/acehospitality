<div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Quanterly Transactions</h5>
                </div>
                <div class="card-body">
                    <div class="chart-wrapper">
                        {{-- <div id="monthly_transaction" height="130" class="chart-dropshadow"></div> --}}
                        <x-apex-charts :chart-id="$chartId" :series-data="$data" :categories="$labels" series-name="Transaction year" :chart-type="$chartType"/>
                    </div>
                </div>
            </div>


</div>
