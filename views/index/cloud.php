<?php
$json = [];

$max = 1;
foreach ($result->getFacet('keyword_s') as $key => $nb) {
    if ($nb > $max) {
        $max = $nb ;
    }
    $v = ($nb * 100) / $max;

    $json[] = [$key, $v];

} ?>
<div class="card">
    <div class="card-block" style="height:400px;">
        <h4 class="card-title">Mots clés</h4>
        <canvas id="cloud" width="480" height="300"></canvas>
        <script>
            var list = <?php echo json_encode($json); ?>;

            WordCloud(document.getElementById('cloud'), { list: list, minSize:2} );

        </script>

    </div>
</div>