<script class="tempJquery">


  document.getElementById("sharingURL").addEventListener("click", function() {
    copyToClipboard(document.getElementById("sharingURL"));
});

function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    $(".success").text("URL copied!");
    return succeed;
}

  var activePriceList = "Builder";
$.post("./PricingCalc/priceimport.php", //Required URL of the page on server 
{ 
activePriceList: activePriceList
},

function(response,status){ // Required Callback Function
var liveData = JSON.parse(response);


var livePanelUSD = parseInt(liveData.phplivepanelUSD);
var livePanelCAD = parseInt(liveData.phplivepanelCAN);
var livePanelName = liveData.phplivepanelName;
var liveStereoUSD = parseInt(liveData.phplivestereoUSD);
var liveStereoCAD = parseInt(liveData.phplivestereoCAN);
var liveStereoName = liveData.phplivestereoName;
var liveSurroundUSD = parseInt(liveData.phplivesurroundUSD);
var liveSurroundCAD = parseInt(liveData.phplivesurroundCAN);
var liveSurroundName = liveData.phplivesurroundName;
var livePlateUSD = parseInt(liveData.phpliveplateUSD);
var livePlateCAD = parseInt(liveData.phpliveplateCAN);
var livePlateName = liveData.phpliveplateName;
var liveSpeakerUSD = parseInt(liveData.phplivespeakerUSD);
var liveSpeakerCAD = parseInt(liveData.phplivespeakerCAN);
var liveSpeakerName = liveData.phplivespeakerName;
var liveSubUSD = parseInt(liveData.phplivesubUSD);
var liveSubCAD = parseInt(liveData.phplivesubCAN);
var liveSubName = liveData.phplivesubName;
var liveAppleUSD = parseInt(liveData.phpliveappletvUSD);
var liveAppleCAD = parseInt(liveData.phpliveappletvCAN);
var liveAppleName = liveData.phpliveappletvName;
var liveCommIUSD = parseInt(liveData.phplivecommIUSD);
var liveCommICAD = parseInt(liveData.phplivecommICAN);
var liveCommIName = liveData.phplivecommIName;
var liveCommIIUSD = parseInt(liveData.phplivecommIIUSD);
var liveCommIICAD = parseInt(liveData.phplivecommIICAN);
var liveCommIIName = liveData.phplivecommIIName;
var liveCommIIIUSD = parseInt(liveData.phplivecommIIIUSD);
var liveCommIIICAD = parseInt(liveData.phplivecommIIICAN);
var liveCommIIIName = liveData.phplivecommIIIName;
var liveCommIVUSD = parseInt(liveData.phplivecommIVUSD);
var liveCommIVCAD = parseInt(liveData.phplivecommIVCAN);
var liveCommIVName = liveData.phplivecommIVName;
var liveCommVUSD = parseInt(liveData.phplivecommVUSD);
var liveCommVCAD = parseInt(liveData.phplivecommVCAN);
var liveCommVName = liveData.phplivecommVName;
var liveCommVIUSD = parseInt(liveData.phplivecommVIUSD);
var liveCommVICAD = parseInt(liveData.phplivecommVICAN);
var liveCommVIName = liveData.phplivecommVIName;



$.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    })
}




    
function generateShop(panels, stereo, surround, plate, commission, appletv, speaker, sub, country) {
    if(country == " USD") {
        if(commission > 0) {
            var shoplevel = ["16576610755", "16576692675", "16576698819", "16576704707", "16576707843", "16576712195"];
            var shopLv = shoplevel[commission - 1];
        }
        var URLbuild = "https://airhome.myshopify.com/cart/962574179:" + panels;
        if(stereo > 0 ) { URLbuild += ",977434711:" + stereo; }
        if(surround > 0 ) {URLbuild += ",963013067:" + surround; }
        if(plate > 0 ) { URLbuild += ",970803947:" + plate; }
        if(commission > 0) { URLbuild += "," + shopLv + ":1"; }
        if(appletv > 0) { URLbuild += ",16576763267:" + appletv; }
        if(speaker > 0) { URLbuild += ",17947307907:" + speaker; }
        if(sub > 0) { URLbuild += ",16576751363:" + sub; }
        $(".shopifyButton").attr("href", URLbuild);
        $("#pdfShop").attr("href", URLbuild);
    } else {
        if(commission > 0) {
            var shoplevel = ["16325354759", "16325392327", "16325392711", "16325395655", "16325397703", "16325398919"];
            var shopLv = shoplevel[commission - 1];
        }
        var URLbuild = "https://airhomeca.myshopify.com/cart/1128627489:" + panels;
        if(stereo > 0 ) { URLbuild += ",1128643149:" + stereo; }
        if(surround > 0 ) {URLbuild += ",1128643629:" + surround; }
        if(plate > 0 ) { URLbuild += ",3565867649:" + plate; }
        if(commission > 0) { URLbuild += "," + shopLv + ":1"; }
        if(appletv > 0) { URLbuild += ",16325417863:" + appletv; }
        if(speaker > 0) { URLbuild += ",18234750023:" + speaker; }
        if(sub > 0) { URLbuild += ",16325411719:" + sub; }
        $(".shopifyButton").attr("href", URLbuild);
        $("#pdfShop").attr("href", URLbuild);
    }

}

function generateURL() {

    var generatedURL = "index.php?";
    var genNumRoom = 0;
    generatedURL += "numroom=" + $('.roomContainer').length;
    if($("#confignamingCheck").prop("checked")){
    generatedURL += "&configname=" + $("#configName").val();
    }
    if($("#squarefeet").val().length > 0){
    generatedURL += "&squarefeet=" + $("#squarefeet").val();
    }
    if($("#metricImpcheck").prop("checked")){
    generatedURL += "&metric=TRUE";
    }
    if($("#currencySelect").val() == "CAD"){
    generatedURL += "&uscan=TRUE";
    }
    if($("#zipcode").val().length > 0){
    generatedURL += "&zipcode=" + $("#zipcode").val();
    if($("#commission").prop("checked")){
    generatedURL += "&commission=TRUE";
    }
    }
    if($("#addressCheck").prop("checked")){
    generatedURL += "&address=" + $("#addressConfig").val();
    }
    var genCommission = 0;
    
    $('.roomContainer').each(function() {
        genNumRoom += 1;
        if($(this).find(".roomNameLeft").first().text() == "Room"){
        generatedURL += "&" + genNumRoom + "roomname=" + $(this).find(".roomNameLeft").first().text() + " " + genNumRoom;
        } else { generatedURL += "&" + genNumRoom + "roomname=" + $(this).find(".roomNameLeft").first().text();
        }
        if($(this).find(".stereosurround").prop("checked")){
            generatedURL += "&" + genNumRoom + "surround=TRUE";
        }
        if($(this).find(".speakersOption").prop("checked")){
            generatedURL += "&" + genNumRoom + "speakers=TRUE";
            if($(this).find(".wallceilingStereo").prop("checked")){
                generatedURL += "&" + genNumRoom + "ceilingwallstereo=TRUE";
            }
            if($(this).find(".wallceilingRear").prop("checked")){
                generatedURL += "&" + genNumRoom + "ceilingwallsurround1=TRUE";
            }  
            if($(this).find(".wallceilingFront").prop("checked")){
                generatedURL += "&" + genNumRoom + "ceilingwallsurround2=TRUE";
            }  
            if($(this).find(".subwooferSection1").find(".subwoofercheck").prop("checked")){
            generatedURL += "&" + genNumRoom + "subwoofer=TRUE";
            }
        }
        
        if($(this).find(".subwooferSection2").find(".subwoofercheck").prop("checked")){
            generatedURL += "&" + genNumRoom + "subwoofer=TRUE";
        }
        if($(this).find(".appleTV").prop("checked")){
            generatedURL += "&" + genNumRoom + "appletv=TRUE";
        }
        
        
    });
    
    
    window.history.replaceState("bar","Testing", "./" + generatedURL);
    
    
    

}


function preparePDF() {
var pdfPlateNum = 0;
var pdfPanelsNUM = $(".configStereo").length;
var pdfStereoNUM = 0;
var pdfSurroundNUM = 0;
var pdfceilingSPEAKNUM= 0;
var pdfwallSPEAKNUM= 0;
var pdfSUBNUM= 0;
var pdfAppleNUM= 0;
var squareFEET = parseInt($("#squarefeet").val());
var NUMsquareFEET = 0;

if( $(".currencySelect").val() == "USD"){
          var NUMroomsROUNDUSD = livePanelUSD;
          var NUMstereoUSD = liveStereoUSD;
          var NUMspeakerUSD = liveSpeakerUSD;
          var NUMsurroundUSD = liveSurroundUSD;
          var NUMsubwoofUSD = liveSubUSD;
          var NUMappletvUSD = liveAppleUSD;
          var plateUSD = livePlateUSD;
          var currency = " USD";
          var commLVL1 = liveCommIUSD;
          var commLVL2 = liveCommIIUSD;
          var commLVL3 = liveCommIIIUSD;
          var commLVL4 = liveCommIVUSD;
          var commLVL5 = liveCommVUSD;
          var commLVL6 = liveCommVIUSD;
        } else {
          var NUMroomsROUNDUSD = livePanelCAD;
          var NUMstereoUSD = liveStereoCAD;
          var NUMsurroundUSD = liveSurroundCAD;
          var NUMspeakerUSD = liveSpeakerCAD;
          var NUMsubwoofUSD = liveSubCAD;
          var NUMappletvUSD = liveAppleCAD;
          var plateUSD = livePlateCAD;
          var currency = " CAD";
          var commLVL1 = liveCommICAD;
          var commLVL2 = liveCommIICAD;
          var commLVL3 = liveCommIIICAD;
          var commLVL4 = liveCommIVCAD;
          var commLVL5 = liveCommVCAD;
          var commLVL6 = liveCommVICAD;
        }




 if( $("#metricImpcheck:checked").length == 1 ) {
          var tempMeters = squareFEET;
          squareFEET = (tempMeters*3.28084);       
          }
        
          if(squareFEET > 2999) {
           var remainder = (squareFEET - 2999);
           NUMsquareFEET += Math.ceil(remainder/1500);
           
          } else { NUMsquareFEET = 0; }   


$(".pdfProj").text($("#configName").val());
$(".pdfAdd").text($("#addressConfig").val());
$(".pdfZip").text($("#zipcode").val());
$(".pdfFeet").text($("#squarefeet").val());


var commLVL = ['2999', '4499', '5999', '7499', '8999', '50000'];
var commUSD = [commLVL1, commLVL2, commLVL3, commLVL4, commLVL5, commLVL6];
var commLevel = 0;
var commPrice = 0;

if($("#commission").prop("checked")){
    $.each(commLVL, function(key, value) {
         if(squareFEET < value) {
              commLevel = key + 1;
              commPrice = commUSD[key];
              return false;
         }
    });
}

var pdfData = "";
pdfData += '<span class="pdfsecTitle" style="padding: 10px 15px; display: block; font-size: 20px; margin-top: 10px;">Airhome System Configuration</span><div class="pdfsecHeader" style="color: #fff; background: #58a7d2;padding: 5px 15px 7px; border-radius: 7px;"><span class="pdfHeader pdfA" style="font-size: 17px;">Room</span><span class="pdfHeader pdfB" style="font-size: 17px; position: absolute; left: 59%; ">Summary</span></div>';
var pdfgrey  = "";
$(".roomContainer").each(function(){

pdfData += '<span class="pdfRow" style="margin: 0 15px; display: inline-block;padding: 5px 15px;font-size: 14px;position: relative;width: 92%; ' + pdfgrey + '"><span class="pdfrowTitle" style="width: 60%;display: block;float: left;font-size: 14px;">' + $(this).find(".roomnameFormat").text() + '</span>';
pdfData += '<span class="pdfrowSummary" style="float: left; ;position: relative;font-size: 14px;">';

if( $(this).find(".stereosurround:checked").length == 0) {
            pdfData += "Stereo Sound<br>";
            tempPlateNum = 1;
            pdfStereoNUM += 1;
            if( $(this).find(".speakersOption:checked").length == 1) {
                if( $(this).find(".wallceilingStereo:checked").length == 1) {
                    pdfData += "+ Wall Speakers<br>";
                    pdfwallSPEAKNUM += 2;
                } else {
                    pdfData += "+ Ceiling Speakers<br>";
                    pdfceilingSPEAKNUM += 2;
                }
            }
        } else {
            pdfData += "Surround Sound<br>";
            tempPlateNum = 0;
            pdfSurroundNUM += 1;
            if( $(this).find(".speakersOption").prop("checked")) {
                if( $(this).find(".wallceilingFront").prop("checked")) {
                    pdfData += "+ Front Wall Speakers<br>";
                    pdfwallSPEAKNUM += 3;
                } else {
                    pdfData += "+ Front Ceiling Speakers<br>";
                    pdfceilingSPEAKNUM += 3;
                }
                if( $(this).find(".wallceilingRear").prop("checked")) {
                    pdfData += "+ Rear Wall Speakers<br>";
                    pdfwallSPEAKNUM += 2;
                } else {
                    pdfData += "+ Rear Ceiling Speakers<br>";
                    pdfceilingSPEAKNUM += 2;
                }
            }
        }
        if( $(this).find(".subwoofercheck:checked").length > 0) {
            pdfData += "+ Subwoofer<br>";
            pdfSUBNUM += 1;
            if(tempPlateNum == 1) {
                  pdfPlateNum += 1;
            }
        }
        if( $(this).find(".appleTV:checked").length == 1) {
            pdfData += "+ Apple TV&reg;<br>";
            pdfAppleNUM += 1;
        }

pdfData += '</span></span>';

if (pdfgrey == '') {pdfgrey = 'background: #f7f7f7;';} else {pdfgrey = '';}
});

pdfData += '<span class="pdfsecTitle" style="padding: 10px 15px; display: block; font-size: 20px; margin-top: 10px;">Audio/Video Product Summary</span>';
pdfData += '<div class="pdfsecHeader" style="color: #fff; background: #58a7d2;padding: 5px 15px 7px; border-radius: 7px;"><span class="pdfHeader pdfA" style="font-size: 17px;">Description</span><span class="pdfHeader pdfB" style="font-size: 17px; position: absolute; left: 59%;"><span class="pdfQTY" style="width: 50px; display: inline-block;">Qty.</span><span class="pdfUNIT" style="width: 100px; display: inline-block;">Unit Price</span><span class="pdfTOTAL">Total Price</span></span></div>';
pdfgrey  = "";
pdfData += '<span class="pdfRow " style="margin: 0 15px; display: inline-block;padding: 5px 15px;font-size: 14px;position: relative;width: 92%; ' + pdfgrey + '"><span class="pdfrowTitle" style="width: 60%;display: block;float: left;font-size: 14px;">' + livePanelName + '</span><span class="pdfrowSummary" style="display: inline-block;position: relative;font-size: 14px;"><span class="pdfQTYrow" style="width: 50px; display: inline-block; padding-left: 10px;">' + pdfPanelsNUM + '</span><span class="pdfUNITrow" style="width: 100px; display: inline-block; padding-left: 10px;">$' + NUMroomsROUNDUSD + '</span><span class="pdfTOTALrow" style=" display: inline-block; padding-left: 10px;">$' + ( pdfPanelsNUM*NUMroomsROUNDUSD) + '</span></span></span>';
if (pdfgrey == "") {pdfgrey = 'background: #f7f7f7;';} else {pdfgrey = "";}
if(pdfStereoNUM > 0) { pdfData += '<span class="pdfRow " style="margin: 0 15px; display: inline-block;padding: 5px 15px;font-size: 14px;position: relative;width: 92%; ' + pdfgrey + '"><span class="pdfrowTitle" style="width: 60%;display: block;float: left;font-size: 14px;">' + liveStereoName + '</span><span class="pdfrowSummary" style="display: inline-block;position: relative;font-size: 14px;"><span class="pdfQTYrow" style="width: 50px; display: inline-block; padding-left: 10px;">' + pdfStereoNUM + '</span><span class="pdfUNITrow" style="width: 100px; display: inline-block; padding-left: 10px;">$' + NUMstereoUSD + '</span><span class="pdfTOTALrow" style=" display: inline-block; padding-left: 10px;">$' + (NUMstereoUSD*pdfStereoNUM) + '</span></span></span>';
if (pdfgrey == "") {pdfgrey = 'background: #f7f7f7;';} else {pdfgrey = "";}}



if(pdfSurroundNUM > 0) { pdfData += '<span class="pdfRow " style="margin: 0 15px; display: inline-block;padding: 5px 15px;font-size: 14px;position: relative;width: 92%; ' + pdfgrey + '"><span class="pdfrowTitle" style="width: 60%;display: block;float: left;font-size: 14px;">' + liveSurroundName + '</span><span class="pdfrowSummary" style="display: inline-block;position: relative;font-size: 14px;"><span class="pdfQTYrow" style="width: 50px; display: inline-block; padding-left: 10px;">' + pdfSurroundNUM + '</span><span class="pdfUNITrow" style="width: 100px; display: inline-block; padding-left: 10px;">$' + NUMsurroundUSD + '</span><span class="pdfTOTALrow" style=" display: inline-block; padding-left: 10px;">$' + (pdfSurroundNUM*NUMsurroundUSD) + '</span></span></span>';
if (pdfgrey == '') {pdfgrey = 'background: #f7f7f7;';} else {pdfgrey = '';}}
if(pdfceilingSPEAKNUM > 0 || pdfwallSPEAKNUM > 0) {pdfData += '<span class="pdfRow " style="margin: 0 15px; display: inline-block;padding: 5px 15px;font-size: 14px;position: relative;width: 92%; ' + pdfgrey + '"><span class="pdfrowTitle" style="width: 60%;display: block;float: left;font-size: 14px;">' + liveSpeakerName + '</span><span class="pdfrowSummary" style="display: inline-block;position: relative;font-size: 14px;"><span class="pdfQTYrow" style="width: 50px; display: inline-block; padding-left: 10px;">' + (pdfceilingSPEAKNUM + pdfwallSPEAKNUM ) + '</span><span class="pdfUNITrow" style="width: 100px; display: inline-block; padding-left: 10px;">$' + NUMspeakerUSD + '</span><span class="pdfTOTALrow" style=" display: inline-block; padding-left: 10px;">$' + ( (pdfwallSPEAKNUM+pdfceilingSPEAKNUM)*NUMspeakerUSD) + '</span></span></span>';
if (pdfgrey == '') {pdfgrey = 'background: #f7f7f7;';} else {pdfgrey = '';}}
if(pdfSUBNUM > 0) {pdfData += '<span class="pdfRow " style="margin: 0 15px; display: inline-block;padding: 5px 15px;font-size: 14px;position: relative;width: 92%; ' + pdfgrey + '"><span class="pdfrowTitle" style="width: 60%;display: block;float: left;font-size: 14px;">' + liveSubName + '</span><span class="pdfrowSummary" style="display: inline-block;position: relative;font-size: 14px;"><span class="pdfQTYrow" style="width: 50px; display: inline-block; padding-left: 10px;">' + pdfSUBNUM + '</span><span class="pdfUNITrow" style="width: 100px; display: inline-block; padding-left: 10px;">$' + NUMsubwoofUSD + '</span><span class="pdfTOTALrow" style=" display: inline-block; padding-left: 10px;">$' + ( pdfSUBNUM*NUMsubwoofUSD) + '</span></span></span>';
if (pdfgrey == '') {pdfgrey = 'background: #f7f7f7;';} else {pdfgrey = '';}}
if(pdfAppleNUM > 0) {pdfData += '<span class="pdfRow " style="margin: 0 15px; display: inline-block;padding: 5px 15px;font-size: 14px;position: relative;width: 92%; ' + pdfgrey + '"><span class="pdfrowTitle" style="width: 60%;display: block;float: left;font-size: 14px;">' + liveAppleName + '</span><span class="pdfrowSummary" style="display: inline-block;position: relative;font-size: 14px;"><span class="pdfQTYrow" style="width: 50px; display: inline-block; padding-left: 10px;">' + pdfAppleNUM + '</span><span class="pdfUNITrow" style="width: 100px; display: inline-block; padding-left: 10px;">$' + NUMappletvUSD + '</span><span class="pdfTOTALrow" style=" display: inline-block; padding-left: 10px;">$' + ( pdfAppleNUM*NUMappletvUSD) + '</span></span></span>';
if (pdfgrey == '') {pdfgrey = 'background: #f7f7f7;';} else {pdfgrey = '';}}
if(pdfPlateNum > 0) {pdfData += '<span class="pdfRow " style="margin: 0 15px; display: inline-block;padding: 5px 15px;font-size: 14px;position: relative;width: 92%; ' + pdfgrey + '"><span class="pdfrowTitle" style="width: 60%;display: block;float: left;font-size: 14px;">' + livePlateName + '</span><span class="pdfrowSummary" style="display: inline-block;position: relative;font-size: 14px;"><span class="pdfQTYrow" style="width: 50px; display: inline-block; padding-left: 10px;">' + pdfPlateNum + '</span><span class="pdfUNITrow" style="width: 100px; display: inline-block; padding-left: 10px;">$' + plateUSD + '</span><span class="pdfTOTALrow" style=" display: inline-block; padding-left: 10px;">$' + ( pdfPlateNum*plateUSD) + '</span></span></span>';
if (pdfgrey == '') {pdfgrey = 'background: #f7f7f7;';} else {pdfgrey = '';}}
if($("#commission").prop("checked")){pdfData += '<span class="pdfsecTitle"  style="padding: 10px 15px; display: block; font-size: 20px; margin-top: 10px;">Airhome System Commissioning</span>';
pdfData += '<div class="pdfsecHeader" style="color: #fff; background: #58a7d2;padding: 5px 15px 7px; border-radius: 7px;"><span class="pdfHeader pdfA" style="font-size: 17px;">Description</span><span class="pdfHeader pdfB" style="font-size: 17px; position: absolute; left: 59%;"><span class="pdfQTY">Qty.</span><span class="pdfUNIT">Unit Price</span><span class="pdfTOTAL">Total Price</span></span></div>';
pdfgrey  = "";
pdfData += '<span class="pdfRow " style="margin: 0 15px; display: inline-block;padding: 5px 15px;font-size: 14px;position: relative;width: 92%; ' + pdfgrey + '"><span class="pdfrowTitle" style="width: 60%;display: block;float: left;font-size: 14px;">Wi-Fi&reg; network setup and Airhome configuration Level ' + commLevel + '<br><span class="lightFineprint">*Includes ' + (commLevel+1) + ' x Apple&reg; AirPort Extreme&reg; Wi-Fi&reg; Base Stations</span></span><span class="pdfrowSummary" style="display: inline-block;position: relative;font-size: 14px;"><span class="pdfQTYrow" style="width: 50px; display: inline-block; padding-left: 10px;">1</span><span class="pdfUNITrow" style="width: 100px; display: inline-block; padding-left: 10px;">$' + commPrice + '</span><span class="pdfTOTALrow" style=" display: inline-block; padding-left: 10px;">$' + commPrice + '</span></span></span>';

}






$("#pdfMid").html(pdfData);
}




function demoCheck() {
        var stereoCount = 0;
     var surroundCount = 0;
     $(".roomBox").each(function() {
          if( $(this).parent().find(".stereosurround:checked").length == 0) {
            stereoCount +=1;
          } else {
            surroundCount += 1;
          } });

var stereoConv = [" noamp ", " oneAmp ", " twoAmp ", " threeAmp ", " fourAmp "];

var demoOutput ="";
var surroundOutput = "";

while (stereoCount > 4) {
stereoCount -= 4;
if(surroundCount > 0) {
surroundOutput = ' surround ';
surroundCount -= 1;
}
demoOutput += '<div class="configStereo fourAmp' + surroundOutput + '"></div>';
}

var surroundOutput = "";

var stereoOutput = stereoConv[stereoCount];
if(surroundCount > 0) {
surroundOutput = ' surround ';
surroundCount -= 1;
}
demoOutput += '<div class="configStereo' + stereoOutput + surroundOutput + '"></div>';

while(surroundCount > 0) {
demoOutput += '<div class="configStereo noamp surround"></div>';
surroundCount -= 1;
}
$("#configDemo").html(demoOutput);

}




function calculatorADD() {

var shopPanelsNUM = $(".configStereo").length;
var NUMplate = 0;

      var NUMrooms = 0;
       var NUMstereo = 0;
       var NUMstereoSPEAK = 0;
       var NUMceilingSPEAK = 0;
       var NUMwallSPEAK = 0;
       var NUMsurround = 0;
       var NUMsurroundSPEAK = 0;
       var NUMsubwoof = 0;
       var plateNum = 0;
       var plateTempNum = 0;
       var USDprice = 0;
       var commission = 0;
       var squareFEET = parseInt($("#squarefeet").val());
       var NUMsquareFEET = 0;
       var NUMappletv = 0;
       var wiringLOW = 103;
       var wiringHIGH = 285; 

if( $(".currencySelect").val() == "USD"){
 
          var NUMroomsROUNDUSD = livePanelUSD;
          var NUMstereoUSD = liveStereoUSD;
          var NUMspeakerUSD = liveSpeakerUSD;
          var NUMsurroundUSD = liveSurroundUSD;
          var NUMsubwoofUSD = liveSubUSD;
          var NUMappletvUSD = liveAppleUSD;
          var plateUSD = livePlateUSD;
          var currency = " USD";
          var commLVL1 = liveCommIUSD;
          var commLVL2 = liveCommIIUSD;
          var commLVL3 = liveCommIIIUSD;
          var commLVL4 = liveCommIVUSD;
          var commLVL5 = liveCommVUSD;
          var commLVL6 = liveCommVIUSD;
        } else {
          var NUMroomsROUNDUSD = livePanelCAD;
          var NUMstereoUSD = liveStereoCAD;
          var NUMspeakerUSD = liveSpeakerCAD;
          var NUMsurroundUSD = liveSurroundCAD;
          var NUMsubwoofUSD = liveSubCAD;
          var NUMappletvUSD = liveAppleCAD;
          var plateUSD = livePlateCAD;
          var currency = " CAD";
          var commLVL1 = liveCommICAD;
          var commLVL2 = liveCommIICAD;
          var commLVL3 = liveCommIIICAD;
          var commLVL4 = liveCommIVCAD;
          var commLVL5 = liveCommVCAD;
          var commLVL6 = liveCommVICAD;
        }

       
       $(".roomContainer").each(function() {
NUMrooms += 1;

if( $(this).find(".stereosurround:checked").length == 0) {
            plateTempNum = 1;
            NUMstereo += 1 ;
            if( $(this).find(".speakersOption:checked").length == 1) {
                if( $(this).find(".wallceilingStereo:checked").length == 1) {
                    NUMwallSPEAK += 2;
                } else {
                    NUMceilingSPEAK += 2;
                }
            }
        } else {
            NUMsurround += 1;
            plateTempNum = 0;
            if( $(this).find(".speakersOption").prop("checked")) {
                if( $(this).find(".wallceilingFront").prop("checked")) {
                    NUMwallSPEAK += 3;
                } else {
                    NUMceilingSPEAK += 3;
                }
                if( $(this).find(".wallceilingRear").prop("checked")) {
                    NUMwallSPEAK += 2;
                } else {
                    NUMceilingSPEAK += 2;
                }
            }
        }



          
        if( $(this).find(".subwoofercheck:checked").length > 0) {
              NUMsubwoof += 1;
              if(plateTempNum == 1) {
                   plateNum += 1;
              }
            }
            
            
          
          
          if( $(this).find("#appletvSelect").children(".appleTV").prop("checked") ) {
            NUMappletv += 1;
          }
          
        });
        
        if( $("#metricImpcheck").prop("checked") ) {
          var tempMeters = squareFEET;
          squareFEET = (tempMeters*3.28084);       
          }
        
          
var commLVL = ['2999', '4499', '5999', '7499', '8999', '50000'];
var commUSD = [commLVL1, commLVL2, commLVL3, commLVL4, commLVL5, commLVL6];
var commLevel = 0;
var commPrice = 0;

if($("#commission").prop("checked")){
    commission += 1;
    $.each(commLVL, function(key, value) {
         if(squareFEET < value) {
              commLevel = key + 1;
              commPrice = commUSD[key];
              $("#commLevel").text(" Level " + commLevel);
              return false;
         }
    });
} else {
$("#commLevel").text("");
commLevel = 0;
}


    var NUMroomsROUND = Math.ceil(NUMstereo/4);
    if (NUMsurround > NUMroomsROUND) {
      NUMroomsROUND = NUMsurround;
    }
    

    USDprice += (NUMstereo * NUMstereoUSD);
    USDprice += (plateNum * plateUSD);
    USDprice += ((NUMceilingSPEAK + NUMwallSPEAK) * NUMspeakerUSD);
    USDprice += (NUMsurround * NUMsurroundUSD);
    USDprice += (NUMroomsROUND * NUMroomsROUNDUSD);
    USDprice += (commission * commPrice);
    USDprice += (NUMsubwoof * NUMsubwoofUSD);
    USDprice += (NUMappletv * NUMappletvUSD);
    
    if( $(".currencySelect").val() == "USD"){
        $(".currencyName").text("USD");
    } else {
        $(".currencyName").text("CAD");
        
    }
    
    var wiringlowPrice = (wiringLOW * (NUMsubwoof + (NUMsurround * 5) + (NUMstereo * 2))); 
    $(".wiringLow").text(wiringlowPrice);
    var wiringhighPrice = (wiringHIGH * (NUMsubwoof + (NUMsurround * 5) + (NUMstereo * 2)));
    $(".wiringHigh").text(wiringhighPrice);    
    
        
    generateURL();
    generateShop(shopPanelsNUM, NUMstereo, NUMsurround, NUMplate, commLevel, NUMappletv, NUMwallSPEAK + NUMceilingSPEAK, NUMsubwoof, currency);
    return USDprice;
       
  }



  $(".calculatorPrice").text(calculatorADD()).digits();

 setTimeout(function(){
                        demoCheck();
                    }, 500);
  
  $("calcbody").on("click",".roomNameLeft", function() {
      $(this).parent().siblings("#roomDrop").slideToggle(500);
    $(this).parent().find(".roomnameArrow").html($(this).parent().children(".roomnameArrow").html() == '<i class="fa fa-caret-up"></i>' ? '<i class="fa fa-caret-down"></i>' : '<i class="fa fa-caret-up"></i>');
  });
  
  $("calcbody").on("click",".additionalButton", function() {
    $(this).siblings(".additional").slideToggle(500);
    $(this).find(".arrowAdditional").html($(this).find(".arrowAdditional").html() == '<i class="fa fa-caret-up"></i>' ? '<i class="fa fa-caret-down"></i>' : '<i class="fa fa-caret-up"></i>');
  });
  
  $("calcbody").on("click",".roomnameArrow", function() {
      $(this).parent().siblings("#roomDrop").slideToggle(500);
    $(this).html($(this).html() == '<i class="fa fa-caret-up"></i>' ? '<i class="fa fa-caret-down"></i>' : '<i class="fa fa-caret-up"></i>');
  });
  
  
  $("calcbody").on("change","input.stereosurround", function() {
    
        var stereoCount = 0;
     var surroundCount = 0;

     $(".roomBox").each(function() {
          if( $(this).parent().find(".stereosurround:checked").length == 0) {
            stereoCount +=1;
          } else {
            surroundCount += 1;
          } });
    
 if(surroundCount > 1) {
       var surroundRatio = Math.ceil(stereoCount/4) +1;

      if(surroundRatio < surroundCount) {
            if (confirm('Please note, your current configuration requires more than 1 Airhome Panel. Each Airhome Panel is capable of 4 stereo rooms and 1 surround room. Do you want to add another panel?')) {

            } else { 
                  $(this).attr('checked', false);
                  return; }}

     }
    
    if(this.checked) {
        $(this).parent().parent().siblings(".speakersSection").find(".surroundOption").slideDown(500);
        $(this).parent().parent().siblings(".speakersSection").find(".stereoOption").slideUp(500);
    }
    else {
        $(this).parent().parent().siblings(".speakersSection").find(".surroundOption").slideUp(500);
        $(this).parent().parent().siblings(".speakersSection").find(".stereoOption").slideDown(500);
    }

 setTimeout(function(){
                        demoCheck();
                    }, 500);
  });
   
  $("calcbody").on("input",".roomName", function(e) {   
    var roomName = $(this).val();
    if($(this).val() == "") {
      roomName = "Unnamed Room";
    }
    $(this).parent().parent().find(".roomNameLeft").text(roomName);
    
  });
  
  $("calcbody").on("input","#squarefeet", function(e) {
    setTimeout(function(){
        $(".calculatorPrice").text(calculatorADD()).digits();
    }, 200);
  });
   
$(".speakersOption").each(function() {
    if($(this).prop("checked")){
        $(this).parent().parent().siblings(".speakersSection").slideDown(500);
        $(this).parent().parent().siblings(".subwooferSection1").slideDown(500);
        $(this).parent().parent().siblings(".additional").children(".subwooferSection2").slideUp(500);
    }
    if($(this).parent().parent().siblings(".stereoSurround").children(".stereosurround").prop("checked")){
        $(this).parent().parent().siblings(".speakersSection").find(".surroundOption").slideDown(500);
        $(this).parent().parent().siblings(".speakersSection").find(".stereoOption").slideUp(500);
    }

});
   
   $("calcbody").on("change",".speakersOption", function() {
    if(this.checked) {
        $(this).parent().parent().siblings(".speakersSection").slideDown(500);
        $(this).parent().parent().siblings(".subwooferSection1").slideDown(500);
        $(this).parent().parent().siblings(".additional").children(".subwooferSection2").slideUp(500);
        
    }
    else {
      $(this).parent().parent().siblings(".speakersSection").slideUp(500);
      $(this).parent().parent().siblings(".subwooferSection1").slideUp(500);
      $(this).parent().parent().siblings(".additional").children(".subwooferSection2").slideDown(500);
      
    }
   });
   
   $(".currencySelect").change( function() {
$(".currencySelect").val($(this).val());
    setTimeout(function(){
        $(".calculatorPrice").text(calculatorADD()).digits();
    }, 200);
    
   });
   
   $("calcbody").on("click", function() {
    if($(".deleteRoom").length < 2) {
      $(".deleteRoom").fadeOut(500);
    } else {
      $(".deleteRoom").fadeIn(500);
    }
    
    setTimeout(function(){
        $(".calculatorPrice").text(calculatorADD()).digits();
    }, 200);
   });
   


$("calcbody").on("click",".checkImg", function() {
        var $checkbox = $(this).prev(".check");
        $checkbox.prop('checked', !$checkbox.prop('checked'));

        if($checkbox.prop("checked")) {
            $(this).attr("src", "switch_v1_off.png");
        } else {
            $(this).attr("src", "switch_v1_on.png");
        } 
});



function sendEmail() {
$(".loaderImage").fadeIn(500);
preparePDF();
var pdfToConvert = "<html><body>" + $("#pdfFrame").html() + "</body></html>";
$.post( "convertPDF.php", { data: pdfToConvert } );
  
  
  setTimeout(function(){ var destinationEmail = $("#emailSend").val();
    $.post("./PricingCalc/sendemail_config.php", {
       email1: destinationEmail,
attachment1: "../Airhome_Configuration.pdf"
    }, function(data) {
        $("#returnmessage").append(data);
    $("#emailWindow").fadeOut(500);
    });}, 2000);

}
  
$(".coolButton").click( function() {
preparePDF();
    sendEmail();
    if($(".newsletterCheck").prop("checked")){
        $("#subscribeForm").submit();
    }

var databaseString = {};


databaseString["action"] = "Email Sent";
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


$(".newsletterCheck").change(function() {
    if($(this).prop("checked")){
        var emailTransfer = $("input#emailSend").val();
        $("#eldit-eldit").val(emailTransfer);
    } else {
        $("#eldit-eldit").val("");
    }
});

$("calcbody").on("input","input#emailSend", function() {
    if($(".newsletterCheck").prop("checked")){
        var emailTransfer = $("input#emailSend").val();
        $("#eldit-eldit").val(emailTransfer);
    } else {
        $("#eldit-eldit").val("");
    }
});
  
$(".currencySelect").change(function() {
    setTimeout(function(){
        $(".calculatorPrice").text(calculatorADD()).digits();
    }, 200);
});

$(".emailCopy").click( function() {

var currentURL = $(location).attr('href');
    $("#sharingURL").val(currentURL);
    $("#pdfChange").attr("href", currentURL);
    var long_url = currentURL;

    $("#sharingURL").val(long_url);
    $("#pdfChange").attr("href", long_url);


    $("#emailWindow").fadeToggle(500);
    preparePDF();
    $("#pdfPreview").fadeIn(500);
    $("#pdfPreview").append($("#pdfFrame"))
    $("#pdfPreview").find("#pdfFrame").animate({ 'zoom': .75}, 0);
});

$("#emailWindow").click( function(e) {
    var container = $("#emailPopup");
   
    if(!container.is(e.target) && container.has(e.target).length === 0){
        $("#emailWindow").fadeToggle(500);
        setTimeout(function(){
        $("#returnmessage").text("");
        }, 500);
    }
    
});

$(".fa-times").click(function(){
        $("#emailWindow").fadeToggle(500);
        setTimeout(function(){
        $("#returnmessage").text("");
        }, 500);
});
 
$("#squarefeet").change(function() {
    $("#squarefeetNUM").text($(this).val());
    if( $("#metricImpcheck").prop("checked") ){
        $("#squarefeetABBR").text(" square meter");
    } else {
        $("#squarefeetABBR").text(" square foot");
    }
});

$("#metricChange").click( function() {

    if( $("#metricImpcheck").prop("checked") ){
        $("#metricImpLabel").html('Square meters of your home: <i class="fa fa-info-circle infoHide"><div class="infoHidden">Entering the square footage of your home will provide a variable estimated cost for the wiring and installation of Airhome in your home. Wiring and installation is not included in the Airhome Price Calculator Total. Consult your local builder or contractor for an installation price quote.</div></i>');
        $("#squarefeetABBR").text(" square meter");
    } else {
        $("#metricImpLabel").html('Square feet of your home: <i class="fa fa-info-circle infoHide"><div class="infoHidden">Entering the square footage of your home will provide a variable estimated cost for the wiring and installation of Airhome in your home. Wiring and installation is not included in the Airhome Price Calculator Total. Consult your local builder or contractor for an installation price quote.</div></i>');
        $("#squarefeetABBR").text(" square foot");
    }
});

$("#roomSection").each(function(data){
if($(this).find(".roomContainer").hasClass("added")){
    var roomNumber = $(".roomContainer").length;
    $("#roomSection").children(".roomContainer").last().children(".roomBox").find(".roomNameLeft").append(roomNumber);
    $(".roomnameArrow").html('<i class="fa fa-caret-up"></i>');
    $(".additional").hide();
  }});

 
  $(".addRoom").click(function(){

     var stereoCount = 0;
     var surroundCount = 0;
     var totalCount = 0;

     $(".roomBox").each(function() {
          totalCount += 1;
          if( $(this).parent().find(".stereosurround:checked").length == 0) {
            stereoCount +=1;
          } else {
            surroundCount += 1;
          } });

     if(stereoCount % 4 == 0 ) {
            if( !stereoCount == 0) {
               if((totalCount % 5 )== 0 ) {
            if (confirm('Please note, your current configuration requires more than 1 Airhome Panel. Each Airhome Panel is capable of 4 stereo rooms and 1 surround room. Do you want to add another panel?')) {
            } else { return; }}
     }

    }

    $.get("./PricingCalc/roomBox.php", function(data){
      $("#roomSection").append(data);
      var roomNumber = $(".roomContainer").length;
      $("#roomSection").children(".roomContainer").last().children(".roomBox").children("#roomNameLeft").append(roomNumber);
      $("#roomSection").children(".roomContainer").last().find(".additional").hide();
      if(((stereoCount % 4 ) == 0) && ( surroundCount < Math.ceil(stereoCount/4) )) {
        $("#roomSection").children(".roomContainer").last().find(".stereosurround").prop('checked', true);
        $("#roomSection").children(".roomContainer").last().find(".speakersSection").find(".surroundOption").slideDown(500);
        $("#roomSection").children(".roomContainer").last().find(".speakersSection").find(".stereoOption").slideUp(500);
      }

      if($(".roomContainer").length > 5) {
        $("#roomSection").children(".roomContainer").last().children(".roomDrop").slideUp(500);
        $("#roomSection").children(".roomContainer").last().find(".roomnameArrow").html('<i class="fa fa-caret-down"></i>');
      } else {
        $("#roomSection").children(".roomContainer").last().children(".roomDrop").hide();
        $("#roomSection").children(".roomContainer").last().children(".roomDrop").slideDown(500);
      }
    });

 setTimeout(function(){
                        demoCheck();
                    }, 700);
  });

$("calcbody").on("change", "input.stereosurround", function() {
    if($(this).is(":checked")){
        $(this).addClass("checkedSurround");
    } else { $(this).removeClass("checkedSurround");}
});

$("calcbody").on("click",".roomRightButton", function() {
      $(this).parent().find(".confirmationBox").slideToggle(500);
});

$("calcbody").on("click",".confButton.no", function() {
  $(".confirmationBox").slideUp(500);
});

$("calcbody").on("click",".confButton.yes", function() {

     var stereoCount = 0;
     var surroundCount = 0;
     var panelCount = 0;

$(".roomBox").each(function() {
          if( $(this).parent().find(".stereosurround:checked").length == 0) {
            stereoCount +=1;
          } else {
            surroundCount += 1;
          } });

panelCount = Math.ceil(stereoCount/4);

     if(surroundCount > panelCount) {
            if (confirm('Please note, your current configuration requires more than 1 Airhome Panel. Each Airhome Panel is capable of 4 stereo rooms and 1 surround room. Do you want to add another panel?')) {

     var surroundCount = 0;

$(".roomBox").each(function() {

          if( $(this).parent().find(".stereosurround:checked").length == 0) {
            stereoCount +=1;
          } else {
            surroundCount += 1;
          } });
     if(surroundCount > panelCount) {
            if (confirm('Please note, your current configuration requires more than 1 Airhome Panel. Each Airhome Panel is capable of 4 stereo rooms and 1 surround room. Do you want to add another panel?')) {
            } else { 
                  $(this).attr('checked', false);
                  return; }

     }
            } else { 
                  $(this).attr('checked', false);
                  return; }

     }

  $(this).parent().parent().parent().parent().slideUp(500).remove();

 setTimeout(function(){
                        demoCheck();
                    }, 500);
});

$("calcbody").on("click","#commission", function() {
  if($('input#squarefeet').val() == "") {
alert('You have to tell us how big your home is before we can properly estimate system commissioning.');
$("#commission").prop("checked", false);
}
});

$("#confignamingCheck").each(function() {
    if($(this).prop("checked")){
    $(".nameSlide").slideDown(500);
    }
});

$("calcbody").on("click","#confignamingCheck", function() {
if($(this).prop("checked")) {
$(".nameSlide").slideDown(500);
} else { $(".nameSlide").slideUp(500); }

});

$("#detailsDrop").slideDown(1000);

  $("calcbody").on("click","#detailsBox", function() {
      $(this).siblings("#detailsDrop").slideToggle(500);
    $(this).find(".detailsnameArrow").html($(this).children(".detailsnameArrow").html() == '<i class="fa fa-caret-up"></i>' ? '<i class="fa fa-caret-down"></i>' : '<i class="fa fa-caret-up"></i>');
  });

$("#addressCheck").each(function() {
    if($(this).prop("checked")){
    $(".addressSlide").slideDown(500);
    }
});

$("calcbody").on("click","#addressCheck", function() {
if($(this).prop("checked")) {
$(".addressSlide").slideDown(500);
} else { $(".addressSlide").slideUp(500); }
});



function checkZip(entry) {
    var firstLetter = entry.charAt(0);
    var secondLetter = entry.charAt(1);
    var fullTrimmed = entry.replace(/\s+/g, '');
    if (fullTrimmed.length > 5) {
        if((fullTrimmed.charAt(0) == "T") || (fullTrimmed.charAt(0) == "t")) {
            if($.isNumeric((fullTrimmed).charAt(1))) {
                if($.isNumeric((fullTrimmed).charAt(5))) {
                    $(".zipcodeSlide").slideDown(500);
                    $(".currencySelect").val("CAD");
                    setTimeout(function(){
                        $(".calculatorPrice").text(calculatorADD()).digits();
                    }, 200);
                }
            }
        }
    } else if (fullTrimmed.length == 5) {
        if (fullTrimmed.charAt(0) == 3) {
            if (fullTrimmed.charAt(1) == 2) {
                $(".zipcodeSlide").slideDown(500);
                $(".currencySelect").val("USD");
                setTimeout(function(){
                        $(".calculatorPrice").text(calculatorADD()).digits();
                    }, 200);
            } else { $(".zipcodeSlide").slideUp(500); $("#commission").prop("checked", false);}
        } else { $(".zipcodeSlide").slideUp(500); $("#commission").prop("checked", false);}
    
    } else { $(".zipcodeSlide").slideUp(500); $("#commission").prop("checked", false);}
}

checkZip($("#zipcode").val());

$("calcbody").on("input","#zipcode", function(e) { 
    var zipCode = $(this).val(); 
    checkZip(zipCode);
});

$("calcbody").css("opacity","1");
$(".loaderOverlay").fadeOut(500);
});


</script>	
	