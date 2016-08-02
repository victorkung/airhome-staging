<?php 

$oldvar = 0;
if(isset($_GET['numroom'])) {
$oldvar = 1;
$incomingVAR = array(
    'numroom', 'configname', 'squarefeet', 'metric', 'uscan', 'zipcode', 'address', 'commission'

);

foreach ($incomingVAR as $var) {
    if(isset($_GET[$var])) {
        $newVAR[$var] = $_GET[$var];
    }
}



































}
?>