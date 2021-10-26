<?php

namespace SP\Tools;

use Bitrix\Main\Loader;

class PriceList
{
    private $instanceMpdf;
    private $data = [];
    private $tableColumns = [
        'Наименование работ',
        'Ед.измерения	',
        'Цена от, руб'
    ];
    private $iBlockID = 6;

    public function __construct()
    {
        $this->instanceMpdf = new \Mpdf\Mpdf();
        $this->generatePdf();
    }

    public function outputPdf()
    {
        $this->instanceMpdf->Output();
    }

    private function addStyle()
    {
        $this->instanceMpdf->WriteHTML('
        <style>
            h1 {
                background-color: black;
                color: white;
                text-align: center;
            }
            table {
                text-align: center;
                }
                </style>');

    }

    private function addPage()
    {
        $this->instanceMpdf->AddPage();
    }

    private function generatePdf()
    {
        $this->addStyle();
        $this->getData();
        $this->printTable();
    }

    private function getData()
    {
        Loader::includeModule('iblock');
        $res = \CIBlockElement::GetList([
            'SORT' => 'ASC'
        ], [
            'IBLOCK_ID' => $this->iBlockID,
            'ACTIVE' => 'Y'
        ], false, false, [
            'NAME',
            'PROPERTY_SERVICES',
            'ID'
        ]);
        while ($ob = $res->Fetch()) {
            $this->data[$ob['ID']]['NAME'] = $ob['NAME'];
            $this->data[$ob['ID']]['SERVICES'][] = $ob['PROPERTY_SERVICES_VALUE'];
        }

    }

    private function printTable()
    {
        foreach ($this->data as $item) {
            $this->instanceMpdf->WriteHTML(sprintf('<h1>%s</h1>', $item['NAME']));
            $this->instanceMpdf->WriteHTML('<table width="100%" border="1">');
            $this->instanceMpdf->WriteHTML(sprintf('<tr><td width="200px">%s</td><td width="15px">%s</td><td width="15px">%s</td></tr>',
                $this->tableColumns[0], $this->tableColumns[1], $this->tableColumns[2]));
            foreach ($item["SERVICES"] as $service) {
                $this->instanceMpdf->WriteHTML(sprintf('<tr><td>%s</td><td>%s <sup>%s</sup></td><td>%s</td></tr>',
                    $service['NAME_WORK'], $service['MEAUSRE'], $service['SUP'], $service['PRICE_RUB']));
            }
            $this->instanceMpdf->WriteHTML('</table>');
            if (next($this->data) == true) {
                $this->addPage();
            }

        }
    }
}