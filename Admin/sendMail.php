<?php

    $msg = $_POST['msg'];
    $subject = $_POST['subject'];
    $toemail = $_POST['email'];

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <madi.bandara@gmail.com>' . "\r\n";
    $headers .= 'Cc: senushka@gmail.com' . "\r\n";

    $mail = mail($toemail,$subject,$msg,$headers);

    if($mail) {
        echo "Thanks for mail";
    } else {
        echo "Mail not Sent";
    }
    













//     $mailto = $_POST['email'];
//     $mailsub = $_POST['subject'];
//     $mailMsg = $_POST['msg'];
//     echo getcwd();
//     require "./PHPMailer/PHPMailerAutoload.php";
//     $mail = new PHPMailer();
//     $mail -> IsSmtp();
//     $mail -> SMTPDebug = 1;
//     $mail -> SMTPAuth = true;
//     $mail -> SMTPSecure = 'ssl';
//     $mail -> Host = "smtp.gmail.com";
//     $mail -> Port = 465;
//     $mail -> IsHTML(true);
//     $mail -> Username = "faceidsrilanka@gmail.com";
//     $mail -> Password = "Faceid@123";
//     $mail -> SetFrom("madi.bandara@gmail.com");
//     $mail -> Subject = $mailsub;
//     $mail -> Body = $mailMsg;
//     $mail -> AddAddress($mailto);

//  if(!$mail->Send()){
//      echo "Mail not sent!";
//  }else{
//      echo "Mail Sent";
//  }
 ?>