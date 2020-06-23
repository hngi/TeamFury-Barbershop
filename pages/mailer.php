<?php

  // Include packages and files for PHPMailer and SMTP protocol
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require('../PHPMailer-master/src/PHPMailer.php');
    require('../PHPMailer-master/src/Exception.php');
    require('../PHPMailer-master/src/SMTP.php');

    // Initialize PHP Mailer and set SMTP as a mailing protocol
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    // Setup Gmail Mailing Configuration
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'hngbarbershop@gmail.com';
    $mail->Password = 'Paul1997.';

    // Get the form fields, removes html tags and whitespace.
/*     $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]); */
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "a50903b0a024219895d4@cloudmailin.net";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Set Mail Header and Body
    $mail->AddAddress($email, $name);
    $mail->SetFrom('barbershop@barbershop.com','BaberShop');
    $mail->Subject = $subject;
    $content = 'Name: '.$name.'<br>'.'Email: '.$email.'<br>'.'Message: '.$message;

    // Send Email
    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
        // Redirect to the contact.php page with error message
        header("Location: contact.php?success=-1#form");
        var_dump($mail);
    } else {
        // Redirect to the contact.php page with success message
        header("Location: contact.php?success=1#form");
    }

?>