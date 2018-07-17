

// Dashboard 1 Morris-chart

var months = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];


$.ajax({
    type: "POST",
    contentType: "application/json; charset=utf-8",
    url: "/dashboard/grafico_vendas",
    data:{},
    async: true,
    cache: false,
    dataType: "json",
    success: grafico_sucesso,
    error: grafico_erro
});

function grafico_sucesso(response){

    for (i = 1; i <= 6; i++){

        var mes1 = response[1].mes;
        var mes2 = response[2].mes;
        var mes3 = response[3].mes;
        var mes4 = response[4].mes;
        var mes5 = response[5].mes;
        var mes6 = response[6].mes;
        var mes7 = response[7].mes;

        var nome1 = response[1].nome;
        var nome2 = response[2].nome;
        var nome3 = response[3].nome;
        var nome4 = response[4].nome;
        var nome5 = response[5].nome;
        var nome6 = response[6].nome;
        var nome7 = response[7].nome;

        var ano1 = response[1].ano;
        var ano2 = response[2].ano;
        var ano3 = response[3].ano;
        var ano4 = response[4].ano;
        var ano5 = response[5].ano;
        var ano6 = response[6].ano;
        var ano7 = response[7].ano;
    }

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            month: ano1+'-'+nome1,
            vendas: mes1
        }, {
            month: ano2+'-'+nome2,
            vendas: mes2
        }, {
            month: ano3+'-'+nome3,
            vendas: mes3
        }, {
            month: ano4+'-'+nome4,
            vendas: mes4
        }, {
            month: ano5+'-'+nome5,
            vendas: mes5
        }, {
            month: ano6+'-'+nome6,
            vendas: mes6
        }, {
            month: ano7+'-'+nome7,
            vendas: mes7
        }],
        xkey: 'month',
        ykeys: ['vendas'],
        labels: ['vendas'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#00bfc7'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        gridIntegers: true,
        lineWidth: 3,
        ymin: 0,
        hideHover: 'auto',
        lineColors: ['#00bfc7'],
        resize: true,
        xLabelFormat : function (x) {
            return months[x.getMonth()];
        }, 
        yLabelFormat: function(y) {
            return y != Math.round(y)?'':y;
        },

    });

}

function grafico_erro(){

}

$.ajax({
    type: "POST",
    contentType: "application/json; charset=utf-8",
    url: "/dashboard/grafico_pedidos",
    data:{},
    async: true,
    cache: false,
    dataType: "json",
    success: grafico_sucesso_pedidos,
    error: grafico_erro_pedidos
});

function grafico_sucesso_pedidos(response){

    for (i = 1; i <= 6; i++){

        var mes1 = response[1].mes;
        var mes2 = response[2].mes;
        var mes3 = response[3].mes;
        var mes4 = response[4].mes;
        var mes5 = response[5].mes;
        var mes6 = response[6].mes;
        var mes7 = response[7].mes;

        var nome1 = response[1].nome;
        var nome2 = response[2].nome;
        var nome3 = response[3].nome;
        var nome4 = response[4].nome;
        var nome5 = response[5].nome;
        var nome6 = response[6].nome;
        var nome7 = response[7].nome;

        var ano1 = response[1].ano;
        var ano2 = response[2].ano;
        var ano3 = response[3].ano;
        var ano4 = response[4].ano;
        var ano5 = response[5].ano;
        var ano6 = response[6].ano;
        var ano7 = response[7].ano;
    }

    Morris.Area({
        element: 'morris-area-chart2',
        data: [{
            month: ano1+'-'+nome1,
            pedidos: mes1
        }, {
            month: ano2+'-'+nome2,
            pedidos: mes2
        }, {
            month: ano3+'-'+nome3,
            pedidos: mes3
        }, {
            month: ano4+'-'+nome4,
            pedidos: mes4
        }, {
            month: ano5+'-'+nome5,
            pedidos: mes5
        }, {
            month: ano6+'-'+nome6,
            pedidos: mes6
        }, {
            month: ano7+'-'+nome7,
            pedidos: mes7
        }],
        xkey: 'month',
        ykeys: ['pedidos'],
        labels: ['pedidos'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#00bfc7'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        gridIntegers: true,
        lineWidth: 3,
        ymin: 0,
        hideHover: 'auto',
        lineColors: ['#00bfc7'],
        resize: true,
        xLabelFormat : function (x) {
            return months[x.getMonth()];
        }, 
        yLabelFormat: function(y) {
            return y != Math.round(y)?'':y;
        }
        
    });

}

function grafico_erro_pedidos(){

}


 
 $('.vcarousel').carousel({
            interval: 3000
         })
$(".counter").counterUp({
        delay: 100,
        time: 1200
    });

$(document).ready(function() {
    
   var sparklineLogin = function() { 
        $('#sales1').sparkline([20, 40, 30], {
            type: 'pie',
            height: '90',
            resize: true,
            sliceColors: ['#01c0c8', '#7d5ab6', '#ffffff']
        });
        $('#sparkline2dash').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '154',
            barWidth: '4',
            resize: true,
            barSpacing: '10',
            barColor: '#25a6f7'
        });
        
   }
    var sparkResize;
 
        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();

});