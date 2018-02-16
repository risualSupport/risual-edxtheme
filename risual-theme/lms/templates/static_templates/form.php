
<?php

require("path/to/sendgrid-php/sendgrid-php.php");

$fullname=$_REQUEST['fullname']; //required
$email=$_REQUEST['email']; //required
$message=$_REQUEST['message'];

if (($fullname=="")||($email=="")||($message==""))

echo "All fields are required";  

else
{
$from = new SendGrid\Email("Alex P", $email);
$subject = "Test email";
$to = new SendGrid\Email("RisualTest", "alexp@risual.com");
$content = new SendGrid\Content($fullname, $email, $message);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

echo "Email sent!";

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
}
echo $response->statusCode();
print_r($response->headers());
echo $response->body();

?>