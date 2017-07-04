<?php
$json = [['Pays', 'Nombre']];

foreach ($result->getFacet('country_s') as $key => $nb) {
    $json[] = [$key, $nb];

} ?>


<div class="card">
    <div class="card-block" style="height:400px;">
        <h4 class="card-title">Répartition par pays</h4>
        <div id="regions_div" style="width:100%"></div>
    </div>
</div>

<script type="text/javascript">
    $(function() {

        google.charts.setOnLoadCallback(drawChart2);

        function drawChart2() {

            var dataC = google.visualization.arrayToDataTable(<?php echo json_encode($json); ?>);

            var chartC = new google.visualization.GeoChart(document.getElementById('regions_div'));

            chartC.draw(dataC);
        }
    });


</script>