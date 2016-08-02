<!DOCTYPE html><!--[if lt IE 9]>
<html class='lt-ie9' lang='en'>
<![endif]-->
<!--[if gte IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Airhome wireless multi-room home audio. Pick a room, any room.</title>
  <meta name="description" content="Airhome is the promise of the wireless home, fulfilled. In-ceiling speakers are wired throughout your home, but you control them wirelessly. This ensures quality sound, ultra reliability, and refreshing simplicity. ">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  <link rel="stylesheet" href="https://airhome.io/styles/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="./PricingCalc/calc_style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sheetrock/1.0.0/dist/sheetrock.min.js"></script>
  <?php include 'urlEncoding.php'; ?>


<script>
    function downloadPDF() {
$(".loaderImage").fadeIn(500);
preparePDF();

var pdfToConvert = "<html><body><link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>" + $("#pdfFrame").html() + "</body></html>";
$.post( "convertPDF.php", { data: pdfToConvert } );

setTimeout( function() {

    window.location.href = './Airhome_Configuration.pdf';

}, 2500);
setTimeout( function() {$("#emailWindow").hide();
}, 2000);
}

$(function(){



$("#passwordButton").click(function() {
var password = $.trim($("#builderPass").val()); 
var pass1="Partner2016"; 
if (password==pass1){
$(".alertBack").slideUp(500);
} else { window.location="http://airhome.io/"; } 
});



$.get("./PricingCalc/calc_jquery.php", function(data){
    $("calchead").append(data);
  });
  
$(window).unload(function() {

var databaseString = {};


databaseString["action"] = "Window Close";
databaseString["squarefeet"] = $("#squarefeet").val();
databaseString["zipcode"] = $("#zipcode").val();
databaseString["commission"] = $("#commission").prop("checked");
databaseString["email"] = $("#emailSend").val();
databaseString["price"] = $("#fullPrice").text();
databaseString["configName"] = $("#configName").val();
databaseString["homeAdd"] = $("#addressConfig").val();
var dated = new Date();
var month = dated.getMonth()+1;
var day = dated.getDate();
databaseString["date"] = dated.getFullYear() + '/' +
    (month<10 ? '0' : '') + month + '/' +
    (day<10 ? '0' : '') + day;
databaseString["subscribe"] = $(".newsletterCheck").prop("checked");

var iteration = 1;
 $(".roomContainer").each(function() {
     databaseString["roomname" + iteration] = $(this).find("#roomNameLeft").text();
       if( $(this).find(".stereosurround:checked").length == 0) {
           databaseString["stereosurround" + iteration] = "stereo";
            if( $(this).find(".speakersOption:checked").length == 1) {
               databaseString["speakers" + iteration] = $(this).find(".speakersOption").prop("checked");
                if( $(this).find(".wallceilingStereo:checked").length == 1) {
                    databaseString["speakersa" + iteration] = "wall speakers";
                } else {
                    databaseString["speakersa" + iteration] = "ceiling speakers";
                }
            }
        } else {
            databaseString["stereosurround" + iteration] = "surround";
            if( $(this).find(".speakersOption:checked").length == 1) {
                databaseString["speakers" + iteration] = $(this).find(".speakersOption").prop("checked");
                if( $(this).find(".wallceilingFront:checked").length == 1) {
                    databaseString["speakersa" + iteration] = "wall speakers";
                } else {
                    databaseString["speakersa" + iteration] = "ceiling speakers";
                }
                if( $(this).find(".wallceilingRear:checked").length == 1) {
                    databaseString["speakersb" + iteration] = "wall speakers";
                } else {
                    databaseString["speakersb" + iteration] = "ceiling speakers";
                }
            }
        }
        if( $(this).find(".subwoofercheck:checked").length == 1) {
            databaseString["subwoofer" + iteration] = "TRUE";
        }
        databaseString["appletv" + iteration] = $(this).find(".appleTV").prop("checked");
iteration += 1;
    });

$.ajax({
    type: 'POST',
    async: false,
    url: 'https://zapier.com/hooks/catch/3vz4bs/',
    data: databaseString
});

});


  


});
</script>

</head>

<div class="alertBack">
<div class="alert">
<img src="https://airhome.io/builderpricing/PricingCalc/airhome-partner-program.jpg" style="width: 80%;">
<span class="calcLabel" style="margin-top: 10px;">Please enter the password</span>
<input style="margin-top: 10px;" type="password" id="builderPass"><input style="margin-left: 10px; margin-top: 10px;" type="button" value="Enter" id="passwordButton"></div>

</div>
<div id="pdfFrame" style="width: 1654px;
height: 85%;
width: 93%;
opacity: 0;
position: absolute;
    z-index: -500;
background: #fff;
    font-family: Lato,'Helvetica Neue',sans-serif;
overflow: scroll;">
<div id="pdfHeader" style="width: 100%;
display: block;
position: relative;">
<div id="pdfheaderLeft" style="width: 52%;
display: block;
position: relative;
float: left;
padding-left: 15px;"><img src="https://airhome.io/builderpricing/PricingCalc/airhome-partner-program.jpg" style="width: 80%;"><span class="pdfHeaderPara" style="font-size: 12px;
    line-height: 13px;
    padding-top: 25px;
    display: block;
    color: #555;">Private and Confidential. This builder price summary of your Airhome configuration is available to Airhome Partner Program members only. Please contact sales if you would like to purchase this system. Email: <a href="mailto:sales@airhome.io">sales@airhome.io</a> or call us at +1 (780) 809-1089.<br><br>To modify this configuration, click <a id="pdfChange" href="">here</a>. To purchase, click <a id="pdfShop" href="">here</a>.</span></div>
    <div id="pdfheaderRight" style="float: right;
    width: 42%;"><div class="pdfsecHeader" style="color: #fff;
    background: #58a7d2;
    padding: 5px 15px;
    border-radius: 7px;"><span class="pdfHeader pdfA" style="font-size: 17px;">Configuration Details</span></div>
<span class="pdfRow greyOff" style="margin: 0 15px;
    display: inline-block;
    padding: 8px 15px;
    font-size: 14px;
position: relative;
width: 82%;"><span class="pdfrowTitle" style="
display: block;
    float: left;
font-size: 14px;">Project Name:&nbsp;</span><span class="pdfrowContent pdfProj"></span></span>
<span class="pdfRow greyOn" style="margin: 0 15px; background: #f7f7f7;
    display: inline-block;
    padding: 8px 15px;
    font-size: 14px;
position: relative;
width: 82%;"><span class="pdfrowTitle" style="
display: block;
    float: left;
font-size: 14px;">Address:&nbsp;</span><span class="pdfrowContent pdfAdd"></span></span>
<span class="pdfRow greyOff" style="margin: 0 15px;
    display: inline-block;
    padding: 8px 15px;
    font-size: 14px;
position: relative;
width: 82%;"><span class="pdfrowTitle" style="
display: block;
    float: left;
font-size: 14px;">Zip / Postal Code:&nbsp;</span><span class="pdfrowContent pdfZip"></span></span>
<span class="pdfRow greyOn" style="margin: 0 15px; background: #f7f7f7;
    display: inline-block;
    padding: 8px 15px;
    font-size: 14px;
position: relative;
width: 82%;"><span class="pdfrowTitle" style="
display: block;
    float: left;
font-size: 14px;">Square Feet:&nbsp;</span><span class="pdfrowContent pdfFeet"></span></span>
</div>
</div>
<div id="pdfMid" style="display: block; position: relative; float: left; width: 100%;">
<span class="pdfsecTitle" style="padding: 10px 15px;
    display: block;
    font-size: 18px;
    margin-top: 10px;">Airhome System Configuration</span>
<div class="pdfsecHeader" style="color: #fff;
    background: #58a7d2;
    padding: 5px 15px;
    border-radius: 7px;"><span class="pdfHeader pdfA">Room</span><span class="pdfHeader pdfB">Summary</span></div>
<span class="pdfRow greyOff"><span class="pdfrowTitle">Living Room </span><span class="pdfrowSummary">Surround Sound<br>+ Front Ceiling Speakers<br>+ Rear Ceiling Speakers<br>+ Subwoofer<br>+ AppleTV</span></span>
<span class="pdfRow greyOn"><span class="pdfrowTitle">Bedroom </span><span class="pdfrowSummary">Stereo Sound<br>+ Ceiling Speakers</span></span>

<span class="pdfsecTitle" style="padding: 10px 15px;
    display: block;
    font-size: 18px;
    margin-top: 10px;">Audio/Video Product Summary</span>
<div class="pdfsecHeader" style="color: #fff;
    background: #58a7d2;
    padding: 5px 15px;
    border-radius: 7px;"><span class="pdfHeader pdfA">Description</span><span class="pdfHeader pdfB"><span class="pdfQTY">Qty.</span><span class="pdfUNIT">Unit Price</span><span class="pdfTOTAL">Total Price</span></span></div>
<span class="pdfRow greyOff"><span class="pdfrowTitle">AIRHOME5 home audio distribution panel</span><span class="pdfrowSummary"><span class="pdfQTYrow">1</span><span class="pdfUNITrow">$799.00</span><span class="pdfTOTALrow">$799.99</span></span></span>
<span class="pdfRow greyOn"><span class="pdfrowTitle">AIRHOME5 home audio distribution panel</span><span class="pdfrowSummary"><span class="pdfQTYrow">1</span><span class="pdfUNITrow">$799.00</span><span class="pdfTOTALrow">$799.99</span></span></span>

<span class="pdfsecTitle" style="padding: 10px 15px;
    display: block;
    font-size: 18px;
    margin-top: 10px;">Airhome System Commissioning</span>
<div class="pdfsecHeader" style="color: #fff;
    background: #58a7d2;
    padding: 5px 15px;
    border-radius: 7px;"><span class="pdfHeader pdfA">Description</span><span class="pdfHeader pdfB"><span class="pdfQTY">Qty.</span><span class="pdfUNIT">Unit Price</span><span class="pdfTOTAL">Total Price</span></span></div>
<span class="pdfRow greyOff"><span class="pdfrowTitle">AIRHOME5 home audio distribution panel</span><span class="pdfrowSummary"><span class="pdfQTYrow">1</span><span class="pdfUNITrow">$799.00</span><span class="pdfTOTALrow">$799.99</span></span></span>
<span class="pdfRow greyOn"><span class="pdfrowTitle">AIRHOME5 home audio distribution panel</span><span class="pdfrowSummary"><span class="pdfQTYrow">1</span><span class="pdfUNITrow">$799.00</span><span class="pdfTOTALrow">$799.99</span></span></span>
</div>
<div id="pdfPrice" style="display: block; float: left; width: 300px; margin-top: 30px;"><div id="priceDisplay" style="background: #58a7d2; padding: 20px; border-radius: 15px; color: #fff;"><span class="dollaSign" style="font-size: 18px; vertical-align: top; margin-top: 2px;">$</span><span id="fullPrice" class="calculatorPrice" style="font-size: 30px; vertical-align: top; line-height: 28px;">1,298</span><span class="currencyName" style="margin-left: 10px; vertical-align: bottom;">USD</span>
</div></div>
<div id="pdfFooter" style="display: block; width: 100%; float: left; padding: 15px; border-top: solid 1px; margin-top: 45px;"><div id="pdfClarify" style="font-size: 10px;">*Based on a <span id="squarefeetNUM"></span><span id="squarefeetABBR"></span> home with this Airhome configuration, the estimated wiring cost is between $<span class="wiringLow">0</span> and $<span class="wiringHigh">0</span>. Wiring is not included in this price listed above. Consult your local builder or contractor for an installation price quote. This is not a formal invoice or quote. All pricing is subject to change.</div><span class="fineprint" style="font-size: 10px; display: block; padding-top: 20px; color: #999;">*Airhome must be wired and installed in your home and requires an operational Wi-Fi&reg; network that supports IEEE 802.11b/g standards for operation. **To access online music services and Internet radio stations, an Internet connection is required and a separate fee to an Internet service provider may apply. Airhome products are designed and manufactured by Zenovia Electronics Inc., a wholly owned subsidiary of Roswell Global, Inc. Wi-Fi is a trademark of the Wi-Fi Alliance. AirPort Extreme is a trademark of Apple, Inc. Focal is a trademark of Focal-JMlab. Airhome and Zenovia are trademarks of Zenovia Electronics Inc.</div><img style="width: 100%;" src="https://airhome.io/pricing/PricingCalc/pdfBottom.png">
</div>


<body>
  <div class="body-container">
    <header class="row">
      <div class="container">
        <div class="col-xs-6 col-sm-3"><a href="../"><img src="https://airhome.io/images/header/airhome-logo.png" width="225px" class="logo"></a></div>
        <nav class="desktop-nav col-xs-6 col-sm-9">
          <ul>
            <li><a href="#" id="how-it-works">How It Works</a></li>
            <li><a href="#" id="builder-resources">Builder Resources</a></li>
            <li><a href="../pricing/">Pricing</a></li>
            <li><a href="#" id="support">Support</a></li>
            <li><a href="https://airhomehq.tumblr.com/" target="_blank">Blog</a></li>
            <li><a href="#" id="store">Store</a></li>
          </ul>
        </nav>
        <nav class="mobile-nav col-xs-6 col-sm-9"><a href="../" class="mobile-nav-icon"><img src="https://airhome.io/images/header/menu-icon.png"></a></nav>
        <ul class="mobile-nav-popup row"><img src="../images/header/airhome-logo-white.png" class="logo-white"><span id="close-btn">X</span>
          <div class="col-xs-offset-0 col-xs-12 col-sm-offset-2 col-sm-8">
            <li class="mobile-nav-link"><a href="#" id="mobile-how-it-works">How It Works <span>&#9660;</span></a>
              <ul>
                <li><a href="../product-features/">Product Features</a></li>
                <li><a href="../wifi-network/">Wi-Fi Network</a></li>
                <li><a href="../apps-airplay/">Apps & AirPlay®</a></li>
              </ul>
            </li>
            <li class="mobile-nav-link"><a href="#" id="mobile-builder-resources">Builder Resources <span>&#9660;</span></a>
              <ul>
                <li><a href="../why-airhome/">Why Airhome?</a></li>
                <li><a href="../demo-system/">Demo Systems & POP Displays</a></li>
                <li><a href="../partner-programs/">Partner Program</a></li>
              </ul>
            </li>
            <li class="mobile-nav-link"><a href="../pricing/">Pricing</a></li>
            <li class="mobile-nav-link"><a href="#" id="mobile-support">Support<span>&#9660;</span></a>
              <ul>
                <li><a href="https://airhome.zendesk.com" target="_blank">Support</a></li>
                <li>
                </li>
                <li><a href="https://airhome.typeform.com/to/PPwjef" data-mode="1" target="_blank" class="typeform-share link">
                    Contact Sales
                    </a></li>
              </ul>
            </li>
            <li class="mobile-nav-link"><a href="https://airhomehq.tumblr.com/" target="_blank">Blog</a></li>
            <li class="mobile-nav-link"><a href="#" id="mobile-store">Store<span>&#9660;</span></a>
              <ul>
                <li><a href="https://airhome.myshopify.com" target="_blank">Shopify US</a></li>
                <li><a href="https://airhomeca.myshopify.com" target="_blank">Shopify CAN</a></li>
              </ul>
            </li>
          </div>
        </ul>
      </div>
    </header>
    <div id="how-it-works-dropdown" class="header-dropdown row">
      <div class="container">
        <div class="col-xs-4"><a href="../product-features/"><img src="../images/header/icon_product_features.png"><span class="subnav-title">Product Features</span><span class="subnav-subtitle">Wired speakers, wireless control.</span></a></div>
        <div class="col-xs-4"><a href="../wifi-network/"><img src="../images/header/icon_wifi_network.png"><span class="subnav-title">Wi-Fi Network</span><span class="subnav-subtitle">Wi-Fi network setup info</span></a></div>
        <div class="col-xs-4"><a href="../apps-airplay/"><img src="../images/header/icons_apps_airplay.png"><span class="subnav-title">Apps & AirPlay®</span><span class="subnav-subtitle">Plays from your favourite apps</span></a></div>
      </div>
    </div>
    <div id="builder-resources-dropdown" class="header-dropdown row">
      <div class="container">
        <div class="col-xs-4"><a href="../why-airhome/"> <img src="../images/header/why_airhome_icon.png"><span class="subnav-title">Why Airhome?</span><span class="subnav-subtitle">Delight homes buyers with installed audio</span></a></div>
        <div class="col-xs-4"><a href="../demo-system/"><img src="../images/header/icon_product_features.png"><span class="subnav-title">Demo Systems & POP Displays</span><span class="subnav-subtitle">Sales tools to help you succeed</span></a></div>
        <div class="col-xs-4"><a href="../partner-programs/"><img src="../images/header/partner_icon.png" style="width: 125px; margin-top: 21px"><span class="subnav-title">Partner Program</span><span class="subnav-subtitle">Learn about the Partner Program</span></a></div>
      </div>
    </div>
    <div id="support-dropdown" class="header-dropdown row">
      <div class="container">
        <div class="col-xs-6"><a href="https://airhome.zendesk.com" target="_blank"> <img src="../images/header/support_icon.png"><span class="subnav-title">Support</span><span class="subnav-subtitle">Visit the Airhome support center</span></a></div>
        <div class="col-xs-6"><a href="https://airhome.typeform.com/to/PPwjef" data-mode="1" target="_blank" class="typeform-share link"><img src="../images/header/phone_support.png"><span class="subnav-title">Contact Sales</span><span class="subnav-subtitle">(780) 809-1089</span></a></div>
      </div>
    </div>
    <div id="store-dropdown" class="header-dropdown row">
      <div class="container">
        <div class="col-xs-6"><a href="https://airhome.myshopify.com" target="_blank"> <img src="../images/header/store_icon.png"><span class="subnav-title">Shopify US</span></a></div>
        <div class="col-xs-6"><a href="https://airhomeca.myshopify.com" target="_blank"><img src="../images/header/store_icon.png"><span class="subnav-title">Shopify CAN</span></a></div>
      </div>
    </div>
    <main>
    
    <div style="background-color:#58a7d2" class="banner row">
        <div class="container">
          <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10 content-wrapper">
            <h4 style="color: white">Use the Airhome Pricing Calculator to configure a system for your home.
            </h4>
          </div>
        </div>
      </div>
    
        <div class="cta-box-container row variant-4">




<div class="pricingCalcDiv">

<calchead></calchead>
<div class="loaderOverlay"><img src="./loader.gif" class="loaderImageBody"></div>
<calcbody>

<div id="pricing_calc">

<div id="main_panels">
<div id="leftPanel">
<div id="configDemo"><div class="configStereo oneAmp unfull unsurrfull"></div></div>


<div class="detailsContainer">
  <div id="detailsBox" class="detailsBox">
    <div id="detailsNameLeft" class="detailsNameLeft detailsnameFormat">Configuration Details</div><div class="detailsnameArrow"><i class="fa fa-caret-up"></i></div>
  </div>
  <div id="detailsDrop" class="detailsDrop">
<div class="leftSection">
<div class="squareFeet">

<span id="metricImpLabel" class="calcLabel">Square <?php
if($oldvar == 1){if($newVAR["metric"] == "TRUE"){echo("meters");} else {echo("feet");}}?> of your home: <i class="fa fa-info-circle infoHide"><div class="infoHidden">Entering the square footage of your home will provide a variable estimated cost for the wiring and installation of Airhome in your home. Wiring and installation is not included in the Airhome Price Calculator Total. Consult your local builder or contractor for an installation price quote.</div></i></span>
<input type="number" name="squarefeet" id="squarefeet" step="100" value=<?php if($oldvar == 1){echo($newVAR["squarefeet"]);} else {echo('""');}; ?> >
<div id="metricChange" class="checkboxOuter"><span class="checkboxInner">Feet </span>

<label class="checkboxLabel"><input class="check" type="checkbox" name="metric" id="metricImpcheck" <?php
if($oldvar == 1){if($newVAR["metric"] == "TRUE"){echo("checked");}}?>><span class="checkboxSpan"></span></label>

<span class="checkboxInner"> Meters</span></div>
</div></div>

<div class="leftSection">
<span class="zipcodeSec calcLabel">Enter your zip/postal code <i class="fa fa-info-circle infoHide"><div class="infoHidden">In select regions, Airhome has Commissioning Agents that are specialists trained in the setup of your WIFI Network and Airhome Panel.  Enter your zip code to determine if Airhome Commissioning Agents are available in your area.</div></i></span><input type="text" name="zipcode" id="zipcode" value=<?php if($oldvar == 1){echo($newVAR["zipcode"]);} else {echo('""');}; ?> ><div class="zipcodeSlide">
<span id="commissioning" class="calcLabel">Do you need system commissioning?</span>
<div id="commissionChange" class="checkboxOuter"><span class="checkboxInner">No </span><label class="checkboxLabel"><input type="checkbox" name="commission" id="commission" <?php
if($oldvar == 1){if(isset($_GET["commission"])){echo("checked");}}?>><span class="checkboxSpan"></span></label><span class="checkboxInner"> Yes<i class="fa fa-info-circle infoHide"><div class="infoHidden">System Commissioning includes wireless access points to provide coverage based on the square footage of your home.  It also includes configuration of the wireless network and Airhome Panel.</div></i><span id="commLevel"></span></span></div></div>
</div>

<div class="leftSection">
<span class="configName calcLabel">Do you want to name this configuration?</span>
<div id="configNameyesno" class="checkboxOuter"><span class="checkboxInner">No </span><label class="checkboxLabel"><input class="check" type="checkbox" name="naming" id="confignamingCheck" <?php
if($oldvar == 1){if(isset($_GET["configname"])){echo("checked");}}?>><span class="checkboxSpan"></span></label><span class="checkboxInner"> Yes<i class="fa fa-info-circle infoHide"><div class="infoHidden">Your configuration summary can be download or emailed as a PDF. Use a name to catalogue the configuration for you home. An example would be the family name of the home such as 'Smith Residence', or the name of this style floor plan such as 'The Elite Home'.</div></i></span></div>
<div class="nameSlide">
<input type="text" name="configName" id="configName" placeholder="Ex. Smith Residence"  value=<?php if($oldvar == 1){echo($newVAR["configname"]);} else {echo('""');}; ?>>
<span id="commissioning" class="calcLabel">Do you want to include an address for this configuration?</span>

<div id="addressInput" class="checkboxOuter"><span class="checkboxInner">No </span><label class="checkboxLabel"><input type="checkbox" name="addressCheck" id="addressCheck" <?php
if($oldvar == 1){if(isset($_GET["address"])){echo("checked");}}?>><span class="checkboxSpan"></span></label><span class="checkboxInner"> Yes<i class="fa fa-info-circle infoHide"><div class="infoHidden">Your configuration summary can be downloaded or emailed as a PDF. Add an address or location of the home that you are configuring and it will be included with your PDF summary.</div></i></span></div>
<div class="addressSlide">
<input type="text" name="addressConfig" id="addressConfig" placeholder="Ex. Home Address" value=<?php if($oldvar == 1){echo($newVAR["address"]);} else {echo('""');}; ?>></div>
</div>


</div>


</div>
</div>

<div id="emailWindow">
    <div id="emailPopup">
    <span class="popUpTitle">Share or Download this configuration<i class="fa fa-times"></i></span><form id="configuratorSend"><p id="returnmessage"></p>
        <input id="emailSend" type="text" name="emailSend" class="emailSend" placeholder="email address"></form>
         <span class="centerTitle">Get Airhome updates in your email</span>
        <div id="subscribeEmail" class="checkboxOuter"><span class="checkboxInner">No </span><label class="checkboxLabel"><input type="checkbox" name="newsletterCheck" class="newsletterCheck"><span class="checkboxSpan"></span></label><span class="checkboxInner"> Yes</span><img src="./loader.gif" class="loaderImage"></a></div>
                <form id="subscribeForm" action="https://zenovia.createsend.com/t/j/s/eldit/" method="post">
                <input id="newsletterInput" name="cm-eldit-eldit" placeholder="Join our mailing list" class="email-input">
                
              </form>
              <a class="coolButton">Send<a href="javascript:downloadPDF()" class="coolbutton2">Download a PDF</a>
              <br>
              <span class="centerTitle">Bookmark or email the link below to save this configuration</span>
              <input type="text" id="sharingURL" class="regularText" readonly><br><span class="success"></span>
              
    </div>
    <div id="pdfPreview"><h5>PDF Preview</h5></div>
</div>


<div class="leftSection desktop">
<div id="priceDisplay"><span class="dollaSign">$</span><span id="fullPrice" class="calculatorPrice"></span><span class="currencyName"></span>
</div><div id="currency_switch"><select id="currencySelect" class="currencySelect">
<?php
if($oldvar == 1){
  if($newVAR["uscan"] == "TRUE") {
    echo('<option value="CAD">Price in CAD</option><option value="USD">Price in USD</option>');
  } else {
    echo('  <option value="USD">Price in USD</option><option value="CAD">Price in CAD</option>');
  }
} else {
echo('  <option value="USD">Price in USD</option><option value="CAD">Price in CAD</option>');

}
?>

</select><i class="fa fa-info-circle infoHide"><div class="infoHidden">Airhome is currently available to buy in the United States and Canada.<br>Select your currency.</div></i></div>
<a href="#" class="emailCopy">Buy, Share or Download this configuration <i class="fa fa-envelope emailButton"></i></a>
</div>

<div class="leftSection clarification desktop">
*Based on a <span id="squarefeetNUM"></span><span id="squarefeetABBR"></span> home with this Airhome configuration, the estimated wiring cost is between $<span class="wiringLow"></span> and $<span class="wiringHigh"></span>. Wiring is not included in this price listed above. Consult your local builder or contractor for an installation price quote.
</div>
</div>

<div id="rightPanel">

<div id="roomSection">
<?php if(isset($_GET['numroom'])) { include './PricingCalc/roomBoxPHP.php'; } else { include'./PricingCalc/roomBox.php'; } ?>
</div>
<span class="addRoom">+ Add a Room</span>
<div class="leftSection clarification mobile">
*Based on a <span id="squarefeetNUM"></span><span id="squarefeetABBR"></span> home with this Airhome configuration, the estimated wiring cost is between $<span class="wiringLow"></span> and $<span class="wiringHigh"></span>. Wiring is not included in this price listed above. Consult your local builder or contractor for an installation price quote.
</div>
</div>
<div class="bottomFloat"><div id="priceDisplay" class="mobile"><span class="dollaSign">$</span><span class="calculatorPrice"></span><span class="currencyName"></span>
</div>
<div id="currency_switchMOB"><select id="currencySelectMOB" class="currencySelect mobile">
<?php
if($oldvar == 1){
  if($newVAR["uscan"] == "TRUE") {
    echo('<option value="CAD">Price in CAD</option><option value="USD">Price in USD</option>');
  } else {
    echo('  <option value="USD">Price in USD</option><option value="CAD">Price in CAD</option>');
  }
} else {
echo('  <option value="USD">Price in USD</option><option value="CAD">Price in CAD</option>');

}
?>
</select><i class="fa fa-info-circle infoHide"><div class="infoHidden">Airhome is currently available to buy in the United States and Canada.<br>Select your currency.</div></i></div>
<a href="#" class="emailCopy mobile">Buy, Share, or Download this configuration <i class="fa fa-envelope emailButton"></i><i class="fa fa-info-circle infoHide"><div class="infoHidden">You may email yourself a copy of the configuration. To email more than one person, separate each email with a comma: Ex. joe@home.com, bob@home.com</div></i></a>
</div></div>
</calcbody>


</div>
</div>

          
        </div>
      </div>
    </main>
    <footer class="row">
      <div class="container">
        <div class="row">
          <div class="col-xs-offset-1 col-xs-11 col-sm-offset-2 col-sm-5 col-md-offset-1 col-md-2"><img src="../images/footer/zenovia-logo.png" width="150" class="footer-logo">
            <p>Airhome is designed and manufactured by Zenovia Electronics, a wholly owned subsidiary of Roswell Global. </p>
          </div>
          <nav class="col-xs-offset-1 col-xs-11 col-sm-offset-0 col-sm-5 col-md-2">
            <ul>
              <li><a href="https://twitter.com/airhomehq" target="_blank">@AirhomeHQ</a></li>
              <li><a href="https://airhomehq.tumblr.com/" target="_blank">Blog</a></li>
              <li><a href="https://airhome.zendesk.com/" target="_blank">Support</a></li>
              <li><a href="https://airhome.typeform.com/to/fc6TVN" data-mode="1" target="_blank" class="typeform-share link">Contact Us</a></li>
              <li><a href="mailto:jimi@airhome.io">Jobs</a></li>
              <li><a href="../brand-guidlines/">Brand Guidlines</a></li>
            </ul>
          </nav>
          <nav class="col-xs-offset-1 col-xs-11 col-sm-offset-2 col-sm-5 col-md-offset-0 col-md-2">
            <ul>
              <li><a href="https://itunes.apple.com/us/app/airhome/id587992467?mt=8" target="_blank">Airhome App</a></li>
              <li><a href="../apps-airplay/">How to AirPlay</a></li>
              <li> <a href="https://www.zenoviaelectronics.com/legal/warranty/" target="_blank">Warranty</a></li>
              <li><a href="https://www.zenoviaelectronics.com/legal/privacy/" target="_blank">Privacy</a></li>
              <li><a href="https://www.zenoviaelectronics.com/legal/privacy/" target="_blank">Terms of Service</a></li>
              <li><a href="https://www.zenoviaelectronics.com/legal/patents/" target="_blank">Patents</a></li>
            </ul>
          </nav>
          <nav class="col-xs-offset-1 col-xs-11 col-sm-offset-0 col-sm-5 col-md-2">
            <ul>
              <li><a href="../product-features/wall-mounting/">How to Install</a></li>
              <li> <a href="../product-features/wiring-connections/">How to Wire</a></li>
              <li><a href="../why-airhome/">Home Builders</a></li>
              <li><a href="https://airhome.typeform.com/to/PPwjef" data-mode="1" target="_blank" class="typeform-share link">Yacht Builders</a></li>
              <li><a href="../wifi-network/wifi-commissioning/">Airhome Commissioning</a></li>
              <li><a href="../partner-programs/">Partner Program</a></li>
            </ul>
          </nav>
          <nav class="col-xs-offset-1 col-xs-11 col-sm-offset-2 col-sm-5 col-md-offset-0 col-md-2">
            <ul>
              <form id="subscribeForm" action="https://zenovia.createsend.com/t/j/s/eldit/" method="post">
                <input id="eldit-eldit" name="cm-eldit-eldit" placeholder="Join our mailing list" class="email-input">
                <input id="submit" type="submit" value="Sign-up">
              </form>
            </ul>
          </nav>
        </div>
        <div class="row">
          <div class="col-xs-offset-1 col-xs-11 col-sm-offset-2 col-sm-10 col-md-offset-1 col-md-10">
            <p class="footer-disclaimer">*AirPlay works with iPhone, iPad, and iPod touch with iOS 4.3.3 or later, Mac with OS X Mountain Lion or later, Mac and PC with iTunes 10.2.2 or later. AirPlay, iPhone, iPad, iPod touch, Mac, iTunes, AirPort Extreme, Apple Watch and Apple TV are trademarks of Apple Inc., registered in the U.S. and other countries. The Wi-Fi CERTIFIED Logo is a certification mark of the Wi-Fi Alliance. Wi-Fi is a trademark of the Wi-Fi Alliance. Airhome is a trademark of Zenovia Electronics Inc.</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="../scripts/main.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-56053973-1', 'auto');
      ga('send', 'pageview');
      
    </script>
    <script>
      (function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()
      
    </script>
  </div>
</body></html>			