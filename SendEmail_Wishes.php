  <?php
    if(isset($_POST['submit'])) {


     $email_to = "harikrishna1989k.com";
    $email_subject = "Ttesting mail";


     function died($error) {
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
    }

    // validation expected data exists
    if(!isset($_POST['fullname']) ||
    	!isset($_POST['emailaddress']) ||
    !isset($_POST['phone']) ||
    !isset($_POST['subject']) ||
    !isset($_POST['message'])) {
    died('We are sorry, but there appears to be a problem with the form you');                  
 }

$first_name = $_POST['fullname']; // required
$email_from = $_POST['emailaddress']; // required
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message = $_POST['message']; // required

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$email_from)) {
$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
}
$string_exp = "/^[A-Za-z .'-]+$/";
if(!preg_match($string_exp,$first_name)) {
$error_message .= 'The First Name you entered does not appear to be valid.<br />';
 }
 $phone_exp="/^[0-9]+$/";
 if(!preg_match($string_exp,$phone)) {
 $error_message .= 'The Phone number you entered does not appear to be valid.<br />';
}

if(!preg_match($string_exp,$subject)) {
$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
}
if(strlen($message) < 2) {
$error_message .= 'The Comments you entered do not appear to be valid.<br />';
}
if(strlen($error_message) > 0) {
died($error_message);
}
$email_message = "Form details below.\n\n";

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

$email_message .= "First Name: ".clean_string($first_name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Phone: ".clean_string($phone)."\n";
$email_message .= "Subject: ".clean_string($subject)."\n";
$email_message .= "Message: ".clean_string($message)."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  
}
    ?> 
