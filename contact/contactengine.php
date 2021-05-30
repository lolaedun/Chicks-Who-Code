<?php

$EmailFrom = Trim(stripslashes($_POST['Email']));
$EmailTo = "hello@chickswhocode.com"; // <- Please add your email
$Subject = "Message from Chicks Who Code";
$Title = Trim(stripslashes($_POST['Name'])); 
$Message = Trim(stripslashes($_POST['Message'])); 



// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>