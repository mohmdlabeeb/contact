<?php
 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = 'Website message';
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo ="your@mail.in";
    $headers ="FROM: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    if(mail($mailTo,$subject,$txt,$headers)){
              echo "Your Message has beeen sent";

    }else{
              echo "Failed to deliver your message";
    }
}
