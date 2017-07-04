<div class="container">
    <div class="card">
        <div class="card-block">
            <?php
            if (! $document instanceof Document) {
                ?>
                <div class="alert alert-danger" role="alert">
                    Document inexistant
                </div>
                <?php
                die("");
            }
            ?>
            <div class="row">
                <div class="col-8">
                    <div class="text-right">
                        <span class="badge badge-success"><?php echo $document->getSubmitType();?></span>
                        <span class="badge badge-default"><?php echo $document->getDoctype()?></span>
                    </div>
                    <h2><span class="badge badge-info"><?php echo $document->getId() ?></span></h2>
                    <h1><?php echo $document->getTitle()?>&nbsp</h1>
                    <blockquote class="text-grey">
                        <?php echo implode(', ', $document->getAuthors()); ?>
                    </blockquote>
                    <p class="text-justify">
                        <small>
                            <?php echo $document->getAbstract()?>
                        </small>
                    </p>
                    <hr />
                    <p>
                        <?php echo implode(', ', $document->getStructures()); ?>
                    </p>
                    <hr />
                    <?php if ($fileUrl = $document->getUrlFile()) { ?>
                        <iframe src="<?php echo $fileUrl ?>" width="100%" height="900px;">
                        </iframe>
                    <?php } ?>
                </div>

                <div class="col-4">
                    <div class="card" style="background-color: #f5f5f5;">
                        <div class="card-block">
                            <h5 class="card-title">Citation</h5>
                            <p class="card-text"><?php echo $document->getCitation()?></p>
                        </div>
                    </div>
                    <br />
                    <div class="card" style="background-color: #f5f5f5;">
                        <div class="card-block">
                            <p class="card-text">
                            <div><small>URL</small></div>
                            <div class="text-right">
                                <a href="<?php echo $document->getUri();?>" target="_blank" class="text-info"><?php echo $document->getUri();?></a>
                            </div>

                            <?php if ($keywords = $document->getKeyword()) { ?>
                                <div><small>Keywords</small></div>
                                <div class="text-right">
                                    <span class="badge badge-default"><?php echo implode('</span> <span class="badge badge-default">', $keywords); ?></span>
                                </div>
                            <?php } ?>
                            <?php if ($idExt = $document->getIdExt()) { ?>
                                <div><small>Identifiants</small></div>
                                <div class="text-right">
                                    <?php foreach ($idExt as $id) { ?>
                                        <span ><?php echo $id; ?></span>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <?php if ($document->getDoctype() == 'ART' && $revue = $document->getRevue()) { ?>
                                <div><small>Publié dans</small></div>
                                <div class="text-right">
                                    <?php echo $revue; ?>
                                </div>
                            <?php } ?>

                            <?php if ($document->getDoctype() == 'COMM' && $conf = $document->getConference()) { ?>
                                <div><small>Conférence</small></div>
                                <div class="text-right">
                                    <?php echo $conf; ?>
                                </div>
                            <?php } ?>
                            <div><small>Déposé par</small></div>
                            <div class="text-right">
                                <?php echo $document->getContributor(); ?>
                            </div>
                            <div><small>Déposé le</small></div>
                            <div class="text-right">
                                <?php echo $document->getSubmittedDate(); ?>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>