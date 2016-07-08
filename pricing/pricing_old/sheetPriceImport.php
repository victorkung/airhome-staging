<?php

 
// Set your CSV feed
$feed = 'https://docs.google.com/spreadsheets/d/1sjPCeA4qfnylOYaIzdtHBwR-VKMaYOJuMx8Qtd1DBfY/pub?gid=834714555&single=true&output=csv';
 
// Arrays we'll use later
$keys = array();
$newArray = array();
 
// Function to convert CSV into associative array
function csvToArray($file, $delimiter) { 
  if (($handle = fopen($file, 'r')) !== FALSE) { 
    $i = 0; 
    while (($lineArray = fgetcsv($handle, 4000, $delimiter, '"')) !== FALSE) { 
      for ($j = 0; $j < count($lineArray); $j++) { 
        $arr[$i][$j] = $lineArray[$j]; 
      } 
      $i++; 
    } 
    fclose($handle); 
  } 
  return $arr; 
} 
 
// Do it
$data = csvToArray($feed, ',');
 
// Set number of elements (minus 1 because we shift off the first row)
$count = count($data) - 1;
 
//Use first row for names  
$labels = array_shift($data);  
 
foreach ($labels as $label) {
  $keys[] = $label;
}
 
// Add Ids, just in case we want them later
$keys[] = 'id';
 
for ($i = 0; $i < $count; $i++) {
  $data[$i][] = $i;
}
 
// Bring it all together
for ($j = 0; $j < $count; $j++) {
  $d = array_combine($keys, $data[$j]);
  $newArray[$j] = $d;
}


$priceCategory = " Retail";
$products = array(0 => "panel",1 => "stereo",2 => "surround",3 => "plate",5 => "speaker",8 => "sub",10 => "commiss",11 => "wap",13 => "appletv",14 => "commI",15 => "commII",16 => "commIII",17 => "commIV",18 => "commV",19 => "commVI");
$curr = array("USD","CAN");


foreach($products as $num => $name) {
$varnamename = 'live'.$name."Name";
$$varnamename = $newArray[$num]['NAME'];
  foreach($curr as $dol){
    $variableName = 'live'.$name.$dol;
    $$variableName = $newArray[$num][$dol.$priceCategory];
  }
}


?> 