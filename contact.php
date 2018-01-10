<?php

require_once("admin/scripts/config.php");
  if(isset($_POST['submit'])){
        // echo "Good for you, you can click a button";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $street = $_POST['street'];
        $message = $_POST['message'];

        // echo $message;
        if($street === ""){
          // echo "Human";
            $sendMail = submitMessage($name, $email, $message);
        }
  }

?>
