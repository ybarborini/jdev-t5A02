<?php

if (isset($_GET['halid'])) {
    $halid = $_GET['halid'];
    $view = 'document.php';
} else {
    $view = 'index.php';
}

require __DIR__ . DIRECTORY_SEPARATOR . 'views/layout.php';