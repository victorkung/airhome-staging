<?php
if (isset($_GET["error"]))
{
    echo("<pre>OAuth Error: " . $_GET["error"]."\n");
    echo('<a href="index.php">Retry</a></pre>');
    die;
}
$authorizeUrl = 'https://api.tradegecko.com/oauth/authorize';
$accessTokenUrl = 'https://api.tradegecko.com/oauth/token';
$clientId = '4b3c33e2a5c3b09e8faf9fce0e6e0374522db780c38baa9bcdcb2e402db23918';
$clientSecret = 'e85a2ff4464237533248bbc4785fba0d78c869adc157911aed52606abbbb247a';
$userAgent = 'ChangeMeClient/0.1 by YourUsername';

$redirectUrl = 'http://www.minotaurcreative.com/AirHome/PricingCalc/pricingtg/PricingCalc/priceimport.php';

require("Client.php");
require("GrantType/IGrantType.php");
require("GrantType/AuthorizationCode.php");

$client = new OAuth2\Client($clientId, $clientSecret, OAuth2\Client::AUTH_TYPE_AUTHORIZATION_BASIC);
$client->setCurlOption(CURLOPT_USERAGENT,$userAgent);


    $client->setAccessToken('89ace884d8431809a0a993bade50fd5f081dfa089d2a002bd40a596625036363');
    $client->setAccessTokenType(OAuth2\Client::ACCESS_TOKEN_BEARER);

if(isset($_POST["activePriceList"])){
$activePriceList = $_POST["activePriceList"];}
    
if($activePriceList == "Retail") {
    $priceLists = array("5224" => "USD", "6673" => "CAD");
} else { 
    $priceLists = array("6603" => "USD", "6604" => "CAD");
}
$products = array("4077932" => "panel","4077934" => "stereo","4077939" => "surround","3860314" => "plate","6571564"=> "speaker","15507420" => "sub","10636663" => "appletv","12247096" => "commI","13947459" => "commII","13947476" => "commIII","13947480" => "commIV","13947485" => "commV","13947487" => "commVI");
$liveData = array();


foreach($products as $num => $name) {
$response = $client->fetch("https://api.tradegecko.com/variants/".$num);
$liveData['phplive'.$name."Name"] = $response["result"]["variant"]["name"];

  foreach($priceLists as $priceListID => $dol){
    foreach($response["result"]["variant"]["variant_prices"] as $tgPriceList){
    if ($tgPriceList["price_list_id"] == $priceListID) {
        $liveData['phplive'.$name.$dol] = $tgPriceList["value"];
    }
    }
    
    
    
  } 
}
echo json_encode($liveData);

?>