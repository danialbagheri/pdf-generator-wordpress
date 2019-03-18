<?php /* Template Name: PDF Generator */ 
require(ABSPATH."wp-content/plugins/pdf-generator/vendor/autoload.php");
$bgPortrait = "/wp-content/plugins/pdf-generator/bg-a4.png";
$bgLand = "/wp-content/plugins/pdf-generator/bg-a4-land.png";
use Dompdf\Dompdf;
 
    $name = $_GET['pname'];
    $number = $_GET['pnumber'];
    $style = $_GET['pstyle'];
    if ($style == "portrait") {
    $content = "<!DOCTYPE html>
<html> <head><title></title><style>
        .wrapper {
            width: 595px;
            height: 842px;
            background-image: url({$bgPortrait});
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
        #name {
            position: absolute;
            top: 354px;
            font-size: 2em;
            left: 38px;
            width: 511px;
            height: 89px;
            text-align: center;
            vertical-align: middle;
        }
        #number {
            position: absolute;
            top: 537px;
            font-size: 2em;
            left: 38px;
            width: 511px;
            height: 89px;
            text-align: center;
            vertical-align: middle;
        }
    </style></head> <body> <div class=wrapper></div> <span id=name>$name</span> <span id=number>$number</span> </body> </html>";
    } else {
        $content = "<!DOCTYPE html>
<html> <head><title></title><style>
        .wrapper {
            height: 595px;
            width: 842px;
            background-image: url({$bgLand});
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
        #name {
            position: absolute;
            top: 214px;
            font-size: 2em;
            left: 132px;
            height: 511px;
            width: 469px;
            text-align: center;
            vertical-align: middle;
        }
        #number {
            position: absolute;
            top: 354px;
            font-size: 2em;
            left: 114px;
            width: 251px;
            height: 49px;
            text-align: center;
            vertical-align: middle;
        }
    </style></head> <body> <div class=wrapper></div> <span id=name>$name</span> <span id=number>$number</span> </body> </html>";
    }
    $html2pdf = new Dompdf();
    $html2pdf->loadHtml($content);
    $html2pdf->setPaper('letter', $style);
    $html2pdf->render();
    $html2pdf->stream(strtotime('now').'.pdf');
