<?php

  $SEND_TO  = "zach@zachzimm.com";
  $SUBJECT  = "Zachzimm.com contact form";


  if( !isset($_POST['fromName']) || !isset($_POST['fromEmail']) || !isset($_POST['message']) )
  {
    echo "There seems to have been some trouble sending your message. Please feel free to email me at zach@zachzimm.com.";
    return;
  }
  

  if( isset($_POST['fromName']) && empty($_POST['fromName']) )
  {
    echo "Please enter your name.";
    return;  
  }
  else 
  {
    if( isset($_POST['fromEmail']) && empty($_POST['fromEmail']) )
    {
      echo "Please enter an email address.";
      return;  
    }
    else
    {
      if( isset($_POST['fromEmail']) && !filter_var( $_POST['fromEmail'], FILTER_VALIDATE_EMAIL ) )
      {
        echo "Please enter a valid email address.";
        return;  
      }
      else
      {
        if( isset($_POST['message']) && empty($_POST['message']) )
        {
          echo "Please enter a message.";
          return;
        }
      }
    }
  }
  /* proceed to send email */
  
  $fromName   = filter_var($_POST['fromName'],   FILTER_SANITIZE_STRING);
  $fromEmail  = filter_var($_POST['fromEmail'],  FILTER_SANITIZE_EMAIL); 
  $message    = filter_var($_POST['message'],    FILTER_SANITIZE_STRING);
  
  $emailBody = "Name: $fromName \n Email address: $fromEmail \n Message: $message";
  
  if( mail($SEND_TO, $SUBJECT, $emailBody) )
  {
    echo "Your message has been successfully sent.";
  }
  else
  {
    echo "There seems to have been some trouble sending your message. Please feel free to email me at zach@zachzimm.com.";
  }
  
?>
