
<div class="card">
    <div class="card-block" style="height:400px;overflow: auto;">
        <h4 class="card-title">Les derniers dépôts</h4>
        <h6 class="card-subtitle mb-2 text-muted">par date de soumission</h6>
        <div class="list-group">
            <?php foreach ($result->getDocuments() as $reference) {?>
                <div class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <p class="mb-1" style="padding-left:5px;"><?php echo $reference->citationRef_s?>
                            <a href="index.php?halid=<?php echo $reference->halId_s?>" class="btn btn-outline-primary btn-sm">Voir le document</a>
                        </p>
                    </div>
                </div>
        <?php } ?>
        </div>
    </div>
</div>