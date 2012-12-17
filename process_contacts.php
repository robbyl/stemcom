<?php

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$fax = $_POST['fax'];
$message = $_POST['message'];

$to = "robbyl@ovi.com";
$subject = "STEMCOM MESSAGE FROM" . $fullname;

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'admin <admin@localhost.com>' . "\r\n";
$headers .= 'From: <admin@localhost.com>' . "\r\n";



$message = '<table width="550" border="0" cellspacing="0">
  <tr>
    <td width="100">Full Name:</td>
    <td><strong>' .$fullname  . '</strong></td>
  </tr>
  <tr>
    <td>E-mail:</td>
    <td><strong>' .$email  . '</strong></td>
  </tr>
  <tr>
    <td>Fax:</td>
    <td style="padding-top: 0;"><strong>' .$fax  . '</strong></td>
  </tr>
  <tr>
    <td>Message:</td>
    <td  style="word-wrap: break-word !important;"><strong>' .$message  . '</strong></td>
  </tr>
</table>';

if(mail($to, $subject, $message, $headers)){
    header('Location: Contacts.php?sent=true');
}
 else {
    header('Location: Contacts.php?sent=false');
}
?>
