<?php     $mail_to = 'johnpalmer1@eircom.net'; // specify your email here     
  // Assigning data from the $_POST array to variables     $name = $_POST['sender_name'];  
  $mail_from = $_POST['sender_email'];
  $subject = $_POST['sender_subject']; 
  $message = $_POST['sender_message'];  
  // Construct email subject  
  $subject = 'www.planetpodium.com Message from visitor ' . $name;    
  // Construct email body  
  $body_message = 'From: ' . $name . "\r\n";    
  $body_message .= 'E-mail: ' . $mail_from . "\r\n";   
  $body_message .= 'Subject: ' . $psubject . "\r\n";     
  $body_message .= 'Message: ' . $message;      
  // Construct email headers   
  $headers = 'From: ' . $mail_from . "\r\n";    

  $headers .= 'Reply-To: ' . $mail_from . "\r\n";     
  $mail_sent = mail($mail_to, $subject, $body_message, $headers);     
  if ($mail_sent == true){ ?>     
  <script language="javascript" type="text/javascript">      
  alert('Thank you for the message. We will contact you shortly.');         window.location = 'contact-form.html';        
  </script>  
  <?php } else { ?>    
  <script language="javascript" type="text/javascript">      
  alert('Message not sent. Please, notify the site administrator admin@admin.com');         window.location = 'contact-form.html';     
  </script>   
  <?php     } ?>

Read more: http://webdesy.com/how-to-create-html-php-contact-form-part-2/#ixzz3SOGgyrDz