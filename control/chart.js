var labels123 = ['200', '204', '208', '211', '216', '224', '229', '235', '239', '241', '244', '248', '254', '262', '267', '274', '281', '285', '294', '315', '331', '341', '354', '362'];

Highcharts.chart('container', {

    title: {
        text: 'Current Activity'
    },

    subtitle: {
        text: 'Source: www.railway.gov.bd'
    },

    yAxis: {
        title: {
            text: 'station'
        },
        labels:{
        	formatter: function () {

          	console.log('pos',this.value);
          	return this.value;
         }
        }
    },

    xAxis: {
        accessibility: {
            rangeDescription: 'Range: 2010 to 2017'
        },
        type: 'datetime'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: true
            },
            pointInterval: 300000, // 10 minutes
            pointStart: Date.UTC(2021, 2, 14, 8, 0, 0)
        }
    },

    series: [{
        name: '770 - Dumkatu Express',
        data: [null, null, 211, 208, 204, 208, 211, 216, 224, 229, 229, 229, 235, 239, 239, 241, 243, 248]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});