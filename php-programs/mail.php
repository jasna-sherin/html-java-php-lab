<?php
$to="jesinaisam121@gmail.com";
$subject="test email";
$message="hello,this is a test email from php!";
$headers="from:naisamcp18@gmail.com";
if (mail($to,$subject,$message,$headers)){
echo"email sent successfully.";
}else{

echo"failed to send email.";

}

?>