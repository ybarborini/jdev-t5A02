<?php
$json = [['Type', 'Nombre']];

foreach ($result->getFacet('submitType_s') as $key => $nb) {
    $json[] = [$key, $nb];

}

?>


<div class="card">
    <div class="card-block" style="height:400px;">
        <h4 class="card-title">Répartition par type de dépôt</h4>
        <div id="bar" style="width:100%"></div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        google.charts.setOnLoadCallback(drawChart3);

        function drawChart3() {

            var data3 = google.visualization.arrayToDataTable(<?php echo json_encode($json); ?>);

            var chart3 = new google.charts.Bar(document.getElementById('bar'));

            chart3.draw(data3);
        }
    });


</script>