<?php
	$send = false;
	
  if (count($_POST)>0) {
$name=addslashes(strip_tags($_POST["name"]));
$email=addslashes(strip_tags($_POST["email"]));
$phone=addslashes(strip_tags($_POST["phone"]));
$subject=addslashes(strip_tags($_POST["subject"]));
$message=addslashes(strip_tags($_POST["message"]));

$recipient    = "harikrishna1989k.com";
$object            = "Response from Neeladhri ceramics website visitor";
$htmlmessage    = <<
<MESSAGE
<html>
<head>
    <title>Request from :: Alpine :: Responsive One Page HTML5/CSS3 Parallax Site Template</title>
</head>
<body>
<style>body {
    font: 12px/1.2em Verdana
}</style>
<strong>User: </strong>$name<br/>
<strong>Phone: </strong>$phone<br/>
<strong>Email: </strong>$email<br/>

<p><strong>Message: </strong>$message</p>
</body>
</html>
MESSAGE;

$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $name <$email>\n";
if(mail($recipient, $object, $htmlmessage, $headers)){
$send = true;
}
}
echo json_encode($send);