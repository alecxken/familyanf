@extends('layouts.template')

@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/sankey.js"></script>
<script src="https://code.highcharts.com/modules/organization.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<div class="container">
    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
        Organization charts are a common case of hierarchical network charts,
        where the parent/child relationships between nodes are visualized.
        Highcharts includes a dedicated organization chart type that streamlines
        the process of creating these types of visualizations.
        </p>
        </figure>
</div>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        height: 600,
        inverted: true
    },
    title: {
        text: 'Family Tree - Male Lineage with Sisters and Wives'
    },
    series: [{
        type: 'organization',
        name: 'Family Tree',
        keys: ['from', 'to'],
        data: [
            ['Patriarch', 'Son1'],
            ['Patriarch', 'Son2'],
            ['Son1', 'Grandson1'],
            ['Son1', 'Granddaughter1'],
            ['Son2', 'Grandson2'],
            ['Son2', 'Daughter1'],
            ['Son1', 'Wife1'],
            ['Son2', 'Wife2'],
            ['Grandson1', 'GreatGrandson1'],
            ['Grandson1', 'GreatGranddaughter1'],
            ['Grandson2', 'GreatGrandson2'],
            ['Daughter1', 'Granddaughter2'],
        ],
        levels: [{
            level: 0,
            color: 'silver',
            dataLabels: {
                color: 'black'
            },
            height: 25
        }, {
            level: 1,
            color: '#980104',
        }, {
            level: 2,
            color: '#359154',
        }, {
            level: 3,
            color: '#386796',
        }],
        nodes: [{
            id: 'Patriarch',
            title: 'Patriarch',
            name: 'John',
            image: 'patriarch-image-url'
        }, {
            id: 'Son1',
            title: 'Son',
            name: 'Robert',
            image: 'son1-image-url'
        }, {
            id: 'Son2',
            title: 'Son',
            name: 'Michael',
            image: 'son2-image-url'
        }, {
            id: 'Grandson1',
            title: 'Grandson',
            name: 'William',
            image: 'grandson1-image-url'
        }, {
            id: 'Granddaughter1',
            title: 'Granddaughter',
            name: 'Emily',
            image: 'granddaughter1-image-url'
        }, {
            id: 'Grandson2',
            title: 'Grandson',
            name: 'James',
            image: 'grandson2-image-url'
        }, {
            id: 'Daughter1',
            title: 'Daughter',
            name: 'Sarah',
            image: 'daughter1-image-url'
        }, {
            id: 'Wife1',
            title: 'Wife',
            name: 'Mary',
            image: 'wife1-image-url'
        }, {
            id: 'Wife2',
            title: 'Wife',
            name: 'Linda',
            image: 'wife2-image-url'
        }, {
            id: 'GreatGrandson1',
            title: 'Great Grandson',
            name: 'Henry',
            image: 'greatgrandson1-image-url'
        }, {
            id: 'GreatGranddaughter1',
            title: 'Great Granddaughter',
            name: 'Olivia',
            image: 'greatgranddaughter1-image-url'
        }, {
            id: 'GreatGrandson2',
            title: 'Great Grandson',
            name: 'Thomas',
            image: 'greatgrandson2-image-url'
        }, {
            id: 'Granddaughter2',
            title: 'Granddaughter',
            name: 'Sophia',
            image: 'granddaughter2-image-url'
        }],
        colorByPoint: false,
        color: '#007ad0',
        dataLabels: {
            color: 'white'
        },
        borderColor: 'white',
        nodeWidth: 65
    }],
    tooltip: {
        outside: true
    },
    exporting: {
        allowHTML: true,
        sourceWidth: 800,
        sourceHeight: 600
    }
});

</script>
@endsection
