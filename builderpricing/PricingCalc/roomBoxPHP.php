<?php
$roomNumber = $_GET["numroom"];
$variablesRoom = array('roomname','surround','speakers','ceilingwallstereo','ceilingwallsurround1','ceilingwallsurround2','subwoofer','appletv');
foreach(range(1,$roomNumber) as $numval){
    foreach($variablesRoom as $var) {
        $currentRoom[$var] = $_GET[$numval.$var];
    }
    echo('<div class="roomContainer">
  <div id="roomBox" class="roomBox">
    <div id="roomNameLeft" class="roomNameLeft roomnameFormat">'.$currentRoom['roomname'].'</div><div class="roomnameArrow"><i class="fa fa-caret-up"></i></div>
    <div class="roomRightButton"><i class="fa fa-minus confirmDropdown">
    </i></div><div class="confirmationBox">
      <div class="confirmationInternal">
      <span class="confirmLabel">Do you want to remove <span class="roomNameLeft">'.$currentRoom['roomname'].'</span>?</span>
      <span class="leftButton confButton no">No</span><span class="rightButton confButton yes">Yes</span>
      </div>
    </div>
  </div>
  <div id="roomDrop" class="roomDrop">
    <input id="roomName" type="text" name="roomName" class="roomName" value="'.$currentRoom['roomname'].'" maxlength="19"><br><br>
    <span class="calcLabel">Is this room stereo or surround?</span>
    <div class="stereoSurround checkboxOuter"><span class="checkboxInner">Stereo </span><label class="checkboxLabel"><input type="checkbox" name="stereosurround" class="stereosurround allowedSurround" ');
    if($currentRoom['surround'] == 'TRUE'){echo("checked");}
    echo('><span class="checkboxSpan"></span></label><span class="checkboxInner"> Surround<i class="fa fa-info-circle infoHide"><div class="infoHidden room">Stereo is two channel audio typically used in places rooms like the Kitchen, Bathroom, or outside on the Patio.<br><br>Surround sound is five channel audio best used in a preferred view room like the Living Room or Great Room.</div></i></span></div>
    
    <span class="calcLabel">Do you need speakers for this room?</span>
    <div id="speakers" class="checkboxOuter"><span class="checkboxInner">No </span><label class="checkboxLabel"><input type="checkbox" name="speakers" class="speakersOption" ');
    if($currentRoom['speakers'] == 'TRUE'){echo("checked");}
    echo('><span class="checkboxSpan"></span></label><span class="checkboxInner"> Yes</span></div><br>
    
    <div class="speakersSection">
      <div class="surroundOption">
        <div class="splitColumn1"><span class="centerTitle">Front</span>
        <div id="frontSpeaks" class="checkboxOuter"><span class="checkboxInner">Ceiling </span><label class="checkboxLabel"><input type="checkbox" name="wallceilingFront" class="wallceilingFront" ');
        if($currentRoom['ceilingwallsurround1'] == 'TRUE'){echo("checked");}
        echo('><span class="checkboxSpan"></span></label><span class="checkboxInner"> Wall</span></div></div>
        <div class="splitColumn2"><span class="centerTitle">Rear</span>
        <div id="rearSpeaks" class="checkboxOuter"><span class="checkboxInner">Ceiling </span><label class="checkboxLabel"><input type="checkbox" name="wallceilingRear" class="wallceilingRear" ');
        if($currentRoom['ceilingwallsurround2'] == 'TRUE'){echo("checked");}
        echo('><span class="checkboxSpan"></span></label><span class="checkboxInner"> Wall</span></div></div>
      </div>

      <div class="stereoOption">
        <div id="stereoSpeaks" class="checkboxOuter"><span class="checkboxInner">Ceiling </span><label class="checkboxLabel"><input type="checkbox" name="wallceilingStereo" class="wallceilingStereo" ');
        if($currentRoom['ceilingwallstereo'] == 'TRUE'){echo("checked");}
        echo('><span class="checkboxSpan"></span></label><span class="checkboxInner"> Wall</span></div>
      </div>
    </div>
  <div class="subwooferSection1"><span class="centerTitle">Do you need a subwoofer?</span>
    <div id="subSelect" class="checkboxOuter"><span class="checkboxInner">No </span><label class="checkboxLabel"><input type="checkbox" name="subwoofer" class="subwoofercheck" ');
    if($currentRoom['subwoofer'] == 'TRUE' && $currentRoom['speakers'] == 'TRUE'){echo("checked");}
    echo('><span class="checkboxSpan"></span></label><span class="checkboxInner"> Yes<i class="fa fa-info-circle infoHide"><div class="infoHidden room">A subwoofer is an option for any room and provides additional bass response for sound you can really feel. Airhome can be wired to a speaker wall plate and then a self-powered (active) subwoofer can be connect in the room after Airhome is installed.</div></i></span></div>
  </div><br>
  <span class="additionalButton">Additional Options <span class="arrowAdditional"><i class="fa fa-caret-down"></i></span></span>
  <div class="additional">
   <div class="subwooferSection2"><span class="centerTitle">Do you need a subwoofer?</span>
    <div id="subSelect" class="checkboxOuter"><span class="checkboxInner">No </span><label class="checkboxLabel"><input type="checkbox" name="subwoofer" class="subwoofercheck" ');
    if($currentRoom['subwoofer'] == 'TRUE' && $currentRoom['speakers'] != 'TRUE'){echo("checked");}
    echo('><span class="checkboxSpan"></span></label><span class="checkboxInner"> Yes<i class="fa fa-info-circle infoHide"><div class="infoHidden room">A subwoofer is an option for any room and provides additional bass response for sound you can really feel. Airhome can be wired to a speaker wall plate and then a self-powered (active) subwoofer can be connect in the room after Airhome is installed.</div></i></span></div>
  </div>
  <div class="AppleTVSection">
    <span class="centerTitle">Apple TV&reg;</span>
    <div id="appletvSelect" class="checkboxOuter"><span class="checkboxInner">No </span><label class="checkboxLabel"><input type="checkbox" name="appleTV" class="appleTV" ');
    if($currentRoom['appletv'] == 'TRUE'){echo("checked");}
    echo('><span class="checkboxSpan"></span></label><span class="checkboxInner"> Yes<i class="fa fa-info-circle infoHide"><div class="infoHidden room">Apple TV is a small internet connected media streaming device that connects to your TV using an HDMI cable. It can easily be hidden behind your TV and you can use it to watch movies and TV shows using apps. You can listen to anything you play on your Apple TV with Airhome.</div></i></span></div>    
  </div></div>

</div>
</div>');
} 
?>