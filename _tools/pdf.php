<?php
require_once$_SERVER['DOCUMENT_ROOT'] . '/local/lib/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
\Bitrix\Main\Loader::includeModule('sp.tools');
(new \SP\Tools\PriceList())->outputPdf();
die();
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<style>
    h1 {
        background-color: black;
        color: white;
        text-align: center;
    }
    table{
    text-align: center;
    }
</style>');
$mpdf->WriteHTML('<h1>вйцвйц вйц вйцв </h1>');
$mpdf->WriteHTML('<table width="100%">
    <tr>
        <td>dqwd</td>
        <td>dqwd</td>
        <td>dqwd</td></tr>
    <tr>
        <td>dqwd</td>
        <td>dqwd</td>
        <td>dqwd</td></tr>
    <tr>
        <td>dqwd</td>
        <td>dqwd</td>
        <td>dqwd</td></tr>
    <tr>
        <td>dqwd</td>
        <td>dqwd</td>
        <td>dqwd</td></tr>
</table>');
$mpdf->AddPage();

$mpdf->WriteHTML('<h1>вйцвйц вйц вйцв </h1>');
$mpdf->WriteHTML('
<table width="100%">
    <tr>
        <td>dqwd</td>
        <td>dqwd</td>
        <td>dqwd</td>
        </tr>
    <tr>
        <td>dqwd</td>
        <td>dqwd</td>
        <td>dqwd</td></tr>
    <tr>
        <td>dqwd</td>
        <td>dqwd</td>
        <td>dqwd</td></tr>
    <tr>
        <td>dqwd</td>
        <td>dqwd</td>
        <td>dqwd</td></tr>
</table>');

$mpdf->Output();?>





