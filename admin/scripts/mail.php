<?php
    function redirect_to($location) {
        if($location != NULL){
            header("Location: {$location}");
            exit;
      }
    }
//Collects all of our files together
  function submitMessage($name, $email, $message){
    $to = "jordan26wood@gmail.com";
    $subj = "Email from Portfolio site";
    $extra = "Reply-to: {$email}";
    $msg = "Name:". $name.
    "/n/nEmail:". $email.
    "/n/nMessage:". $message;
    return"Thanks {$name}, your message has been sent!";

    //THIS WILL NOT WORK LOCALLY.
    //THIS NEEDS TO BE TESTED ON YOUR HOSTING
    // mail($to, $subj, $msg, $extra);

    }
 ?>
