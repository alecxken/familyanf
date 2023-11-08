$(document).ready(function() {

	// Bar Chart

	Morris.Bar({
		element: 'bar-charts',
		redrawOnParentResize: true,
		data: [
			{ y: '2006', a: 100, b: 90 },
			{ y: '2007', a: 75,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 90 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Total Income', 'Total Outcome'],
		lineColors: ['#bed600','#005b82'],
		lineWidth: '3px',
		barColors: ['#bed600','#005b82'],
		resize: true,

		redraw: true
	});

	// Line Chart

	Morris.Line({
		element: 'line-charts',
		redrawOnParentResize: true,
		data: [
			{ y: '2006', a: 50, b: 90 },
			{ y: '2007', a: 75,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 50 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Total Sales', 'Total Revenue'],
		lineColors: ['#bed600','#005b82'],
		lineWidth: '3px',
		resize: true,

		redraw: true
	});


	// Apex Chart
	if($('#radialBarChart').length > 0) {
		var options = {
			series: [17],
			chart: {
			height: 300,
			type: 'radialBar',
			dropShadow: {
				enabled: true,
				blur: 2,
				color: '#000',
				opacity: 0.25
			}
		},
		plotOptions: {
			radialBar: {
				hollow: {
				size: '60%',
				}
			},
		},
		fill: {
			opacity: 1.5,
			colors: ['#0082bb', '#0082bb'],
			type: 'gradient',
			gradient: {
				gradientToColors: ['#0082bb', '#0082bb'],
				shadeIntensity: 1,
				opacityFrom: 1,
				opacityTo: 2,
				stops: [0, 50, 100],
				inverseColors: false
			},
		},
		labels: ['NPL Ratio'],
		};

		var chart = new ApexCharts(document.querySelector("#radialBarChart"), options);
		chart.render();
	}

});
