<?php
/* @var $result Result */



?>

<div class="container">
    <div class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="background-color: #f5f5f5;">
                        <div class="card-block">
                            <h5 class="card-title">Nombre de résultats</h5>
                            <p class="card-text">
                                <h2 class="text-right"><span class="badge badge-success"><?php echo $result->getNbResult();?></span></h2>
                            </p>
                        </div>
                    </div>
                    <br />
                    <?php foreach (['docType_s' => "Type de documents", 'primaryDomain_s' => "Discipline", 'authFullName_s' => "Auteur(s)"] as $facet => $label) { ?>
                        <div class="card" style="background-color: #f5f5f5;">
                            <div class="card-block">
                                <h5 class="card-title"><?php echo $label ?></h5>
                                <p class="card-text">
                                    <div class="list-group">
                                        <?php foreach ($result->getFacet($facet) as $value => $nb) { ?>
                                            <a href='<?php echo $url?>&fq[]=<?php echo $facet; ?>:"<?php echo $value ?>"' class="list-group-item justify-content-between list-group-item-action">
                                                <?php echo $value ?>
                                                <span class="badge badge-default badge-pill"><?php echo $nb ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <br />
                    <?php } ?>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-block">
                            <p class="card-text">
                            <form class="form-inline my-2 my-lg-0 text-center">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search" name="q" value="<?php echo $q ?>">
                                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            </p>
                        </div>
                    </div>
                    <br />
                    <table class="table table-striped">
                        <tbody>
                        <?php foreach ($result->getDocuments() as $row) { ?>
                            <tr>
                                <td><div>
                                        <span class="badge badge-default badge-<?php echo $row->docType_s; ?>"><?php echo $row->docType_s; ?></span>
                                        <?php if ($row->submitType_s == 'file') { ?>
                                            <span class="badge badge-success"><?php echo $row->submitType_s; ?></span>
                                        <?php } ?>

                                    </div>
                                    <?php echo $row->label_s; ?>
                                    <a role="button" href="?halid=<?php echo $row->halId_s; ?>" class="btn btn-outline-primary btn-sm">Voir le document</a>
                                </td>
                            </tr>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

