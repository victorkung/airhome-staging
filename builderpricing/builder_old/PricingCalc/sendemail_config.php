<?php
require_once('./PHPMailer/class.phpmailer.php');

$recipient = $_POST["email1"];
$attachment = $_POST["attachment1"];

$mail = new PHPMailer;

$mail->From = "sales@airhome.io";
$mail->FromName = "Airhome Configurator";

$addresses = explode(',', $_POST['email1']);
    foreach ($addresses as $address) {
    $mail->AddCC($address);
    }

$mail->isHTML(true);

$mail->Subject = "Your Airhome Configuration";
$mail->Body = "<img style='width: 250px; margin-bottom: 25px;' src='https://airhome.io/images/header/airhome-logo.png'><br>Thanks for using the Airhome Pricing Calculator!<br><br>Please see the attached PDF summary of your Airhome system configuration.<br><br>If you&#8217;d like to purchase this system, please follow the link in the attached PDF or call us at (780) 809-1089.<br><br><br>Airhome Sales & Support Team<br>www.airhome.io<br><br><small>Zenovia Electronics Inc. designs, manufactures, and sells Airhome&#8482; branded products. Zenovia Electronics is a wholly owned subsidiary of Roswell Global, Inc. This is not a formal invoice or price quote. All pricing is subject to change.
CONFIDENTIALITY: This e-mail message (including attachments, if any) is confidential and is intended only for the addressee. Any unauthorized use or disclosure is strictly prohibited. Disclosure of this e-mail to anyone other than the intended addressee does not constitute waiver of privilege. If you have received this communication in error, please notify us immediately and delete this. Thank you for your cooperation.<br><br></small>";
$mail->AltBody = "Thanks for using the Airhome Pricing Calculator! Please see the attached PDF summary of your Airhome system configuration. If you&#8217;d like to purchase this system, please follow the link in the attached PDF or call us at (780) 809-1089. Airhome Sales & Support Team www.airhome.io<br><br>Zenovia Electronics Inc. designs, manufactures, and sells Airhome&#8482; branded products. Zenovia Electronics is a wholly owned subsidiary of Roswell Global, Inc. This is not a formal invoice or price quote. All pricing is subject to change.
CONFIDENTIALITY: This e-mail message (including attachments, if any) is confidential and is intended only for the addressee. Any unauthorized use or disclosure is strictly prohibited. Disclosure of this e-mail to anyone other than the intended addressee does not constitute waiver of privilege. If you have received this communication in error, please notify us immediately and delete this. Thank you for your cooperation.<br><br>";


$mail->AddAttachment($attachment);      // attachment

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
?>