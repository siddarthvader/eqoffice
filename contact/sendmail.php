
<?php
    include('MAIL/PHPMailerAutoload.php');
    sendMail();
function sendMail()
{
        $json= file_get_contents("php://input");
        $postData = explode(",",$json);
        
        echo var_dump($_POST);

    //     $mail = new PHPMailer;
    //     $mail->IsSMTP();                                      // Set mailer to use SMTP
    //     $mail->Host = 'sg2plcpnl0102.prod.sin2.secureserver.net';  // Specify main and backup SMTP servers
    //     $mail->Port = 465;                                    // TCP port to connect to
    //     $mail->SMTPDebug  = 0;
    //     $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //     $mail->SMTPSecure = "ssl";
    //     $mail->Username = 'anurag@envisagecyberart.in';                 // SMTP username
    //     $mail->Password = 'anypassword';                           // SMTP password
    //     $mail->IsHTML(true);
        
    //     $mail->setFrom('anurag@envisagecyberart.in', 'ECA Admin');
    //     $mail->addAddress($postData["email"], 'Anurag Srivastava');     // Add a recipient
    //     $mail->Subject = 'You have a new information Request';
    //     $mail->Body    = '<b>Name</b>'+$postData['firstname']+' '+$postData['lastname'] +'<br/>'+'<b>Email</b>'+$postData['email']+'<br/>'+'<b>Company</b>'+$postData['company']+'<br/>'+'<b>Message</b>'+$postData['message']+'<br/>'+'<b>Want to schedule a new tour</b>'+$postData['wantToSchedule']+'<br/>';
            
    //     $message = array();
    // if (!$mail->send()) {
    //     $message['success'] = false;
    //     echo 'File could not be sent via E-Mail. Mailer Error: ' . $mail->ErrorInfo;
    // } else {
    //     $message['success'] = true;
    //     echo "\n".'File  has been sent to the specified E-Mail';
    // }
}
