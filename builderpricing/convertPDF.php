<?php
require 'pdfcrowd.php';

$pdfData = $_POST["data"];

try
{   
    // create an API client instance
    $client = new Pdfcrowd("minotaurcreative", "fb742a5c7228988bead9d0ce52d1bf0d");

    // convert a web page and store the generated PDF into a $pdf variable
$out_file = fopen("Airhome_Configuration.pdf", "wb");    
$client->convertHtml($pdfData, $out_file);


    // send the generated PDF 
    fclose($out_file);

}
catch(PdfcrowdException $why)
{
    echo "Pdfcrowd Error: " . $why;
}
?>