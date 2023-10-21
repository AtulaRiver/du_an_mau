<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // var data = google.visualization.arrayToDataTable([
            //   ['Task', 'Hours per Day'],
            //   ['Work',     11],
            //   ['Eat',      2],
            //   ['Commute',  2],
            //   ['Watch TV', 2],
            //   ['Sleep',    7]
            // ]);
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng'],
                <?php foreach ($dsthongke as $thongke) : ?>
                    <?php extract($thongke); ?>['<?= $name ?>', <?= $soluong ?>],
                <?php endforeach; ?>
            ]);

            var options = {
                title: 'BIỂU ĐỒ SỐ LƯỢNG SẢN PHẨM TRONG DANH MỤC',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="piechart_3d" style="width: 1000px; height: 600px; margin-left: 450px;"></div>
</body>

</html>