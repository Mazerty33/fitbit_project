<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Graphique bateau</title>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">

        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Poids Du mois',
            x: -20 //center
        },
        
        xAxis: {
            categories: [<?php for ($i= 31; $i >0 ; $i--) { 
                echo $i.','; // 31 à 1
            } ?>]
        },
        yAxis: {
            title: {
                text: 'Poids'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080' // petite ligne tout en bas
            }]
        },
        tooltip: {
            valueSuffix: 'Kg'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Poids',

            data: [
            <?php for ($i=31; $i >0 ; $i--) { 
                 echo $i.',';
            } ?>
             ]

        }, ]
    });
});
        </script>
    </head>
    <body>
<script src="Ressources/high/js/highcharts.js"></script>
<script src="Ressources/high/js/themes/dark-unica-child.js"></script>

<div id="container" style="width: 75%; height: 100%; margin: 0 auto;  margin-right:12%;"></div>

    </body>
</html>
