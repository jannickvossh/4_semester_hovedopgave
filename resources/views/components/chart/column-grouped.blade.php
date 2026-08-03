@props([
    'chartName' => 'chartName'
])

<div class="chart">
    <div id="{{ $chartName }}Chart"></div>
</div>

<script>
    let {{ $chartName . 'Options' }} = {
        series: [
            {
                name: 'Group 1',
                data: [44, 55, 57, 56, 61],
            },
            {
                name: 'Group 2',
                data: [76, 85, 101, 98, 87],
            },
            {
                name: 'Group 3',
                data: [35, 41, 36, 26, 45],
            },
            {
                name: 'Group 4',
                data: [35, 41, 36, 26, 45],
            },
            {
                name: 'Group 5',
                data: [35, 41, 36, 26, 45],
            },
        ],
        chart: {
            type: 'bar',
            height: 350,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                borderRadius: 5,
                borderRadiusApplication: 'end',
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 3,
            colors: ['transparent'],
        },
        colors: [
            '#ff0255', '#faaa3f', '#e5ee47', '#0bbfe6', '#40738a'
        ],
        xaxis: {
            categories: ['February', 'March', 'April', 'May', 'June'],
            labels: {
                maxHeight: 100,
                rotate: -60,
                rotateAlways: true,
                style: {
                    colors: '#FFFFFF'
                },
                position: 'top',
                trim: true,
                offsetY: 5
            }
        },
        yaxis: {
            labels: {
                style: {
                    colors: '#FFFFFF'
                }
            }
        },
        legend: {
            labels: {
                colors: '#FFFFFF'
            },
            offsetX: -25,
            position: 'right',
            markers: {
                offsetX: -8,
                size: 10,
                strokeWidth: 0,
                shape: 'circle'
            }
        },
        fill: {
            opacity: 1,
        }
    }

    let {{ $chartName . 'Chart' }} = new ApexCharts(document.querySelector('#{{ $chartName }}Chart'), {{ $chartName . 'Options' }})
    {{ $chartName . 'Chart' }}.render()
</script>
