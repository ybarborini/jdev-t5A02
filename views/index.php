<script>
    google.charts.load('current', {'packages':['corechart', 'geochart', 'bar']});
</script>
<div class="container-fluid">

    <div class="starter-template">
        <h1 class="text-white">Collection HAL</h1>
        <p class="lead text-grey">Usage des API de HAL</p>
    </div>

    <div class="row">
        <div class="col-8">
            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'index/last.php'; ?>
        </div>
        <div class="col">
            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'index/cloud.php'; ?>
        </div>

    </div>

    <div class="row" style="margin-top:1.5rem;">
        <div class="col">
            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'index/doctype.php'; ?>
        </div>
        <div class="col">
            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'index/country.php'; ?>
        </div>
        <div class="col">
            <?php include __DIR__ . DIRECTORY_SEPARATOR . 'index/submittype.php'; ?>
        </div>
    </div>

</div>