<?php
//Require class
foreach (scandir(__DIR__ . DIRECTORY_SEPARATOR . 'models') as $file) {
    if (is_file(__DIR__ . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $file)) {
        require __DIR__ . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $file;
    }
}

$request = new Request('https://api.archives-ouvertes.fr/search/hal/?');

if (isset($_GET['halid'])) {
    $halid = $_GET['halid'];
    $document = $request->getDocument($halid);
    $view = 'document.php';
} else if (isset($_GET['q'])) {
    $q = $_GET['q'];
    $fq = isset($_GET['fq']) ? $_GET['fq'] : [];
    $url = $_SERVER['REQUEST_URI'];
    $result = $request->search($q, $fq);
    $view = 'search.php';
} else {
    $view = 'index.php';
}

require __DIR__ . DIRECTORY_SEPARATOR . 'views/layout.php';