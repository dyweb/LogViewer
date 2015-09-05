<div class="row">
    <div class="col-md-3">
        <canvas id="stats-doughnut-chart"></canvas>
    </div>
    <div class="col-md-9">
        <div class="row">
            @foreach($percents as $level => $item)
            <div class="col-md-4">
                <h5>
                    <span class="level level-{{ $level }}">
                        {!! log_lvl_icon($level) . ' ' . $item['name'] !!} - {!! $item['percent'] !!} %
                    </span>
                </h5>
                <div class="progress">
                    <div class="progress-bar level-{{ $level }}" role="progressbar" aria-valuenow="{{ $item['percent'] }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $item['percent'] }}%">
                        {{ $item['count'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@section('scripts')
    @parent

    <script>
        $(function() {
            var data = {!! $reports !!};

            new Chart($('#stats-doughnut-chart')[0].getContext('2d'))
                .Doughnut(data, {
                    animationEasing : "easeOutQuart",
                });
        });
    </script>
@stop
