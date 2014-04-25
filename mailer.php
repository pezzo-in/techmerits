<?php 

if(isset($_POST['Submit'])) {
	
	$email_to = "harikrishna1989k@gmail.com";    // Change This
	$email_subject =  $_POST['subject']; 
	$thankyou = "thanks.html";
	$email_sender = $_POST['emailaddress']; ;  // Change This
	
	// boundary
	$semi_rand = md5(time());
	$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
	
	function died($error) {
		echo "Sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	
	$Name = $_POST['fullname']; // Sender Name
	$Email = $_POST['emailaddress']; // Sender Email
	$Phone = $_POST['phone']; // Sender Phone
	$Comment = $_POST['message']; // Sender Comments

			
	
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	
	$email_message = "PHP Mail With Attachment\n";
	
	$email_message .= "------------------------\n\n\n";
	

	
	$email_message .= "Full Name : ".clean_string($Name)."\n\n"; // Sender Name
	$email_message .= "E-Mail Address : ".clean_string($Email)."\n\n"; // Sender Email
	$email_message .= "Contact Number : ".clean_string($Phone)."\n\n"; // Sender Phone
	$email_message .= "Comments : ".clean_string($Comment)."\n\n\n";  // Sender Comments



	
	
	// multipart boundary
$email_message .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $email_message . "\n\n";
 
foreach($_FILES as $userfile){
      // store the file information to variables for easier access
      $tmp_name = $userfile['tmp_name'];
      $type = $userfile['type'];
      $name = $userfile['name'];
      $size = $userfile['size'];

      // if the upload succeded, the file will exist
      if (file_exists($tmp_name)){

         // check to make sure that it is an uploaded file and not a system file
         if(is_uploaded_file($tmp_name)){
 	
            // Open the file for a binary read
            $file = fopen($tmp_name,'rb');
 	
            // Read the file content into a variable
            $data = fread($file,filesize($tmp_name));

            // Close the file
            fclose($file);
 	
   
            $data = chunk_split(base64_encode($data));
         }
 	
       
         $email_message .= "--{$mime_boundary}\n" .
            "Content-Type: {$type};\n" .
            " name=\"{$name}\"\n" .
            "Content-Disposition: attachment;\n" .
            " filename=\"{$fileatt_name}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n";
      }
   }
			

$headers = 'From: '.$email_sender."\r\n".   // Mail will be sent from your Admin ID
'Reply-To: '.$Email."\r\n" .                // Reply to Sender Email
'X-Mailer: PHP/' . phpversion();
// headers for attachment
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
@mail($email_to, $email_subject, $email_message, $headers);
header("Location: $thankyou");
?>

<script>location.replace('<?php echo $thankyou;?>')</script>
<?php
}
die();
?>