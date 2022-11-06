const chart = Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafico de suma de los indicadores'
    },
    subtitle: {
        text: 'Source: ' +
            '<a href="https://www.ssb.no/en/statbank/table/08940/" ' +
            'target="_blank">SSB</a>'
    },
    xAxis: {
        categories: [],
        crosshair: true
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'Valor'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: []
});




function fetchData(){


    let startDate = $('input[name="startDate"]').val();
    let endDate = $('input[name="endDate"]').val();


    const url = `/grafico/data?start=${startDate}&end=${endDate}`;

    fetch(url).then(function(response){
        return response.json();
    })
    .then(function(myJson){


      chart.xAxis[0].setCategories(myJson.categories);

      if(chart.series.length > 0){
        chart.series[0].remove();

    }

      chart.addSeries(myJson.series[0]);


    });
}

$(function(){

    $start = $('#startDate');
    $end = $('#endDate');

    fetchData();

    $start.change(fetchData);
    $end.change(fetchData);
});
