<?php
$json = [['Type', 'Nombre']];

foreach ($result->getFacet('docType_s') as $key => $nb) {
    $json[] = [$key, $nb];

} ?>


<div class="card">
    <div class="card-block" style="height:400px;">
        <h4 class="card-title">Répartition par type de document</h4>
        <div id="piechart" style="width:100%"></div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable(<?php echo json_encode($json); ?>);

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data);
        }
    });


</script>