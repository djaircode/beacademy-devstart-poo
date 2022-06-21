<?php

ini_set('display_errors', 1);

include 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '';

for ($n = 0; $n <1000; $n++) {
    $html .= 'ó o pente! ó o pente! ó o pente! ó o pente! ó o pente! <br>';
}

$dompdf->loadHtml('<h1>Olá mundo, estou aprendendo PHP</h1>'.$html);

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();
