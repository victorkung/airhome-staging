<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="./calc_style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
$(function(){
  
  $.get("calc_jquery.php", function(data){
    $("calchead").append(data);
  });
 
});
</script>

<calchead></calchead>
<calcbody>

<div id="pricing_calc">

<div id="main_panels">
<div id="leftPanel">
<span class="leftPara">Use the Airhome Pricing Calculator to determine the price of a system installation in your own home.</span>
<span class="leftNote">Note: An Airhome Panel is required for each Surround Amp.</span>

<div class="leftSection">
<div class="squareFeet">

<span id="metricImpLabel" class="calcLabel">Square feet of your home:</span>
<input type="text" name="squarefeet" id="squarefeet" >
<div id="metricChange" class="checkboxOuter"><span class="checkboxInner">Feet </span><input class="check" type="checkbox" name="metric" id="metricImpcheck"><span class="checkboxInner"> Meters</span></div>
</div></div>

<div class="leftSection">
<span class="zipcodeSec calcLabel">Enter your zip/postal code:</span><input type="text" name="zipcode" id="zipcode" ><div class="zipcodeSlide">
<span id="commissioning" class="calcLabel">Do you need system commissioning?</span>
<div id="commissionChange" class="checkboxOuter"><span class="checkboxInner">No </span><input type="checkbox" name="commission" id="commission"><span class="checkboxInner"> Yes<i class="fa fa-info-circle infoHide"><div class="infoHidden">Airhome commissioning agents are available in select regions. If you would like an Airhome commissioning agent to help setup your Wi-Fi network and help you get the most out of your Airhome system, select 'Yes' and we will include the price of having one of our commissioning agents assist with getting started.</div></i></span></div></div>
</div>

<div id="emailWindow">
    <div id="emailPopup">
    <span class="popUpTitle">Email a copy of this configuration</span><form id="configuratorSend"><p id="returnmessage"></p>
        <input id="emailSend" type="text" name="emailSend" class="emailSend" placeholder="email address"></form>
         <span class="centerTitle">Get Airhome updates in your email</span>
        <div id="subscribeEmail" class="checkboxOuter"><span class="checkboxInner">No </span><input type="checkbox" name="newsletterCheck" class="newsletterCheck"><span class="checkboxInner"> Yes</span></div>
                <form id="subscribeForm" action="http://zenovia.createsend.com/t/j/s/eldit/" method="post">
                <input id="eldit-eldit" name="cm-eldit-eldit" placeholder="Join our mailing list" class="email-input">
                
              </form>
              <span class="coolButton">Send</span>
    </div>
</div>

<div class="leftSection desktop">
<div id="priceDisplay"><span class="dollaSign">$</span><span class="calculatorPrice"></span><span class="currencyName"></span>
</div><div id="currency_switch"><select id="currencySelect" class="currencySelect">
  <option value="USD">Price in USD</option>
  <option value="CAD">Price in CAD</option>
</select><i class="fa fa-info-circle infoHide"><div class="infoHidden">Airhome is currently available to buy in the United States and Canada.<br>Select your currency.</div></i></div>
<a href="#" class="emailCopy">Email a copy of this configuration <i class="fa fa-envelope emailButton"></i></a>
</div>

<div class="leftSection clarification desktop">
*Based on a <span id="squarefeetNUM"></span><span id="squarefeetABBR"></span> home with this Airhome configuration, the estimated wiring cost is between $<span class="wiringLow"></span> and $<span class="wiringHigh"></span>. Wiring is not included in this price listed above. Consult your local builder or contractor for an installation price quote.
</div>
</div>

<div id="rightPanel">

<div id="roomSection">
</div>
<span class="addRoom">+ Add a Room</span>
<div class="leftSection clarification mobile">
*Based on a <span id="squarefeetNUM"></span><span id="squarefeetABBR"></span> home with this Airhome configuration, the estimated wiring cost is between $<span class="wiringLow"></span> and $<span class="wiringHigh"></span>. Wiring is not included in this price listed above. Consult your local builder or contractor for an installation price quote.
</div>
</div>
<div id="priceDisplay" class="mobile"><span class="dollaSign">$</span><span class="calculatorPrice"></span><span class="currencyName"></span>
</div>
<a href="#" class="emailCopy mobile">Email a copy of this configuration <i class="fa fa-envelope emailButton"></i></a>
</div>
</calcbody>