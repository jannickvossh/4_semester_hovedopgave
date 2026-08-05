@props([
    'chartName' => 'chartName'
])

<div class="chart">
    <div id="{{ $chartName }}Chart"></div>
</div>

<script>
    let {{ $chartName . 'Options' }} = {
        series: [42, 23, 15, 12, 8],
        chart: {
            type: 'pie',
        },
        colors: ['#ff0255', '#faaa3f', '#e5ee47', '#0bbfe6', '#40738a'],
        stroke: {
            show: false
        },
        labels: ['Organic Search', 'Direct', 'Social', 'Referral', 'Email'],
        legend: {
            show: true,
            labels: {
                colors: '#FFFFFF'
            },
            markers: {
                fillColors: ['#ff0255', '#faaa3f', '#e5ee47', '#0bbfe6', '#40738a'],
                offsetX: -8,
                size: 10,
                strokeWidth: 0,
                shape: 'circle'
            }
        },
        responsive: [
            {
                breakpoint: 480,
                options: {
                    chart: {
                        width: 320,
                    },
                },
            },
        ],
    }

    let {{ $chartName . 'Chart' }} = new ApexCharts(document.querySelector('#{{ $chartName }}Chart'), {{ $chartName . 'Options' }})
    {{ $chartName . 'Chart' }}.render()
</script>
