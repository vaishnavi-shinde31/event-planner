<?php
{
  $name=$_POST["name"];
  $visitors_email=$_POST["Email");
  $message=$_POST["Message"];
  
  
  $email_from="east visitor to the webpage.com";
  $email_subject="new form summission";
  $email_body="User name:$name \n ".
               "User Email:$visitor_email. \n".
               "User message:$message. \n";

  $to:"avinash252@gamil.com";

  $headers="from:$email_from \r\n";

  $headers="Replt-To" $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);

  headers("location first.html");
 

?>