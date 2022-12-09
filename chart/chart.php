<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <script type="text/javascript" src="js/fusioncharts.js"></script>
        <script type="text/javascript" src="js/themes/fusioncharts.theme.fint.js"></script>
        <script type="text/javascript">
            FusionCharts.ready(function(){
                    var revenueChart = new FusionCharts({
                        "type":"column2d",
                        "renderAt":"posisix",
                        "width": "100%",
                        "height":"90%",
                        "dataFormat":"jsonurl",
                        "dataSource": "db2json.php"
                    });
                    revenueChart.render();
                }
            )
        </script>
    </head>
    <body>
        <div id="posisix"></div>
        <a href="../home.php" class="btn btn-sm btn-warning mb-3">back</a>

    </body>
</html>