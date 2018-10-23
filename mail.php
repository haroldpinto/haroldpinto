<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "harpinmer@hotmail.com";
    $email_subject = "Portfolio - Contact Request";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['yourName']) ||
        !isset($_POST['yourEmail']) ||
        !isset($_POST['yourSubject']) ||
        !isset($_POST['yourMessage'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $your_name = $_POST['yourName']; // required
    $your_email = $_POST['yourEmail']; // required
    $your_subject = $_POST['yourSubject']; // not required
    $your_message = $_POST['yourMessage']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$your_email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Name: ".clean_string($your_name)."\n";
    $email_message .= "Email: ".clean_string($your_email)."\n";
    $email_message .= "Subject: ".clean_string($your_subject)."\n";
    $email_message .= "Message: ".clean_string($your_message)."\n";
 
// create email headers
$headers = 'From: '.$your_email."\r\n".
'Reply-To: '.$your_email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>