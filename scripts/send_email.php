<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //get form data
        $email = $_POST["email"];
        $message = $_POST["message"];

        //set email params
        $to = "swasteerc@gmail.com";
        $subject = "Message from website contact form";
        $headers = "From: $email";

        //send email
        if (mail($to,$subject,$message,$headers)){
            echo "Email sent";

        }else{
            echo "Something went wrong, try again";
        }


    }
?>