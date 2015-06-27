<?php
header("Content-Type: text/html;charset=UTF-8");
require 'phpmailer/PHPMailerAutoload.php';

if(isset($_POST['submit'])) {
    
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'lisbon.conference.2015.send@gmail.com';                   // SMTP username
    $mail->Password = 'Kerim2015';               // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    $mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
    $mail->setFrom('gueneykerim@gmail.com', 'Kerim Gueney');//'lisbon.conference.2015.send@gmail.com', 'Lisbon Conference 2015');     //Set who the message is to be sent from
    $mail->addAddress('forecasting-evolution@uni-koeln.de', 'Forecasting Evolution');  // Add a recipient
    //     $mail->addAddress('gueneykerim@gmail.com', 'Forecasting Evolution');  // DEBUG MAIL
    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    $mail->isHTML(true);                                  // Set email format to HTML

    $title                  = $_POST['title'];
    $first_name             = $_POST['name_first'];
    $last_name              = $_POST['name_last'];
    $email                  = $_POST['email'];
    $website                = $_POST['website'];
    $research_area          = $_POST['research_area'];
    $department             = $_POST['department'];
    $department_street      = $_POST['department_street'];
    $department_street_2    = $_POST['department_street_2'];
    $department_city        = $_POST['department_city'];
    $department_state       = $_POST['department_state'];
    $department_zip         = $_POST['department_zip'];
    $department_country     = $_POST['department_country'];
    $phone                  = $_POST['phone'];
    $presentation_title     = $_POST['presentation_title'];
    $presentation_abstract  = $_POST['presentation_abstract'];
    $travel_grant           = $_POST['travel_grant'];
    // $mail->Header           = "Mime-Version: 1.0\r\nContent-type: text/plain; charset=iso-8859-1"


    $mail->Subject = "Lisbon Conference 2015 Registration - $first_name $last_name";
    $mail->Body    = "Registration for: $title $first_name $last_name <br /><br />Email: $email <br /><br />Web Site: $website <br /><br />Research Area: $research_area<br /><br />Department: $department<br /><br />Department Address Line 1: $department_street<br /><br />Department Address Line 2: $department_street_2<br /><br />City: $department_city<br /><br />State / Region: $department_state<br /><br />Postal Code: $department_zip<br /><br />Country: $department_country<br /><br />Phone: $phone<br /><br />Presentation Titile: $presentation_title<br /><br />Presentation Abstract: $presentation_abstract<br /><br />Travel Grant Application: $travel_grant";

    $mail->AltBody = "Registration for: $title $first_name $last_name\r\nEmail: $email\r\nWeb Site: $website\r\nResearch Area: $research_area\r\nDepartment: $department\r\nDepartment Address Line 1: $department_street\r\nDepartment Address Line 2: $department_street_2\r\nCity: $department_city\r\nState / Region: $department_state\r\nPostal Code: $department_zip\r\nCountry: $department_country\r\nPhone: $phone\r\nPresentation Tit\
ile: $presentation_title\r\nPresentation Abstract: $presentation_abstract\r\nTravel Grant Application: $travel_grant";

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));



    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
    }

    echo "Data received.!\r\n\r\nThank you.";

}