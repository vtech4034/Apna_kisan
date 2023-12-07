<?php
error_reporting(0);
date_default_timezone_set("Asia/Kolkata");
session_start();

if ($_SERVER['HTTP_HOST'] == "localhost") {
	$dns = "localhost";
	$user = "root";
	$pass = "";
	$db = "ayush";
} else {
	$dns = "localhost";
	$user = "updpnlaa1_spardha";
	$pass = "hJdnZ4}iQ,Az";
	$db = "updpnlaa1_Spardha";
}
$connection = new mysqli($dns, $user, $pass, $db);

if (mysqli_connect_errno()) {
	printf("Connect failed: %s", mysqli_connect_error());
	exit();
}

function errorMsg($msg, $refer = null) {
	$_SESSION['error_msg'] = "<div class='alert alert-danger'>";
	$_SESSION['error_msg'] .= "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
	$_SESSION['error_msg'] .= "$msg</div>";
	
	if($refer) {
		header("Location: $refer");
	}
}

function successMsg($msg, $refer = null) {
	$_SESSION['success_msg'] = "<div class='alert alert-success'>";
	$_SESSION['success_msg'] .= "<a href='#' class='close' data-dismiss='alert'>&times;</a>";
	$_SESSION['success_msg'] .= "$msg</div>";
	
	if($refer) {
		header("Location: $refer");
	}
}




// ========================
function sendMailforStatus1($email,$status){
    
    	require 'PHPMailer/PHPMailerAutoload.php';
    
        //$email = $_POST['email'];//
        //$email = "rvdaktec@gmail.com";
        
        // $sql = "SELECT * FROM `users` WHERE `email`='$email'";
        // $sql = "SELECT * FROM `temporder` WHERE `email`='$email'";
        
        // $check = mysqli_query($connection,$sql);
        // $row = mysqli_fetch_assoc($check);
        
        // $status = $row['status'];
        $status = 'In process';
        
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'dakshithtechnologies.com';  // Specify main and backup SMTP servers
        //$mail->SMTPAuth = false;
        //$mail->SMTPSecure = false;                              // Enable SMTP authentication
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'test@dakshithtechnologies.com';                 // SMTP username
        $mail->Password = '6oDjV]fV.m~z';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->addCustomHeader('X-custom-header', 'custom-value');
        $mail->setFrom('info@dakshithtechnologies.com', 'Green Seller');
        //$mail->addAddress($email, $row[name]);     // Add a recipient
        $mail->addAddress($email, 'ravi');     // Add a recipient
        // $mail->addAddress('info@dakshithtechnologies.com');               // Name is optional
        // $mail->addReplyTo('info@dakshithtechnologies.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = 'Your Status';
        $mail->Body    = '<p style = "color : red">Your Order Status is: '.$status.'</p>';
        $mail->AltBody = 'Your Order Status is: '.$status;
        
        if(!$mail->send()) {
        	//echo json_encode(0);
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo; die;
        } else {
        	//echo json_encode(1);
            //echo 'Message has been sent';
        }
    }
    
    function sendMailforStatus2($email,$status){
    
    	require 'PHPMailer/PHPMailerAutoload.php';
    
         //$email = $_POST['email'];//
        //$email = "rvdaktec@gmail.com";
        
        // $sql = "SELECT * FROM `users` WHERE `email`='$email'";
        // $sql = "SELECT * FROM `temporder` WHERE `email`='$email'";
        
        // $check = mysqli_query($connection,$sql);
        // $row = mysqli_fetch_assoc($check);
        
        // $status = $row['status'];
        $status = 'Dispatched';
        
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'dakshithtechnologies.com';  // Specify main and backup SMTP servers
        //$mail->SMTPAuth = false;
        //$mail->SMTPSecure = false;                              // Enable SMTP authentication
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'test@dakshithtechnologies.com';                 // SMTP username
        $mail->Password = '6oDjV]fV.m~z';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->addCustomHeader('X-custom-header', 'custom-value');
        $mail->setFrom('info@dakshithtechnologies.com', 'Green Seller');
        //$mail->addAddress($email, $row[name]);     // Add a recipient
        $mail->addAddress($email, 'ravi');     // Add a recipient
        // $mail->addAddress('info@dakshithtechnologies.com');               // Name is optional
        // $mail->addReplyTo('info@dakshithtechnologies.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = 'Your Status';
        $mail->Body    = '<p style = "color : red">Your Order Status is: '.$status.'</p>';
        $mail->AltBody = 'Your Order Status is: '.$status;
        
        if(!$mail->send()) {
        	//echo json_encode(0);
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo; die;
        } else {
        	//echo json_encode(1);
            //echo 'Message has been sent';
        }
    }
    
    function sendMailforStatus3($email,$status){
    
    	require 'PHPMailer/PHPMailerAutoload.php';
    
        //$email = $_POST['email'];//
        //$email = "rvdaktec@gmail.com";
        
        // $sql = "SELECT * FROM `users` WHERE `email`='$email'";
        // $sql = "SELECT * FROM `temporder` WHERE `email`='$email'";
        
        // $check = mysqli_query($connection,$sql);
        // $row = mysqli_fetch_assoc($check);
        
        // $status = $row['status'];
        $status = 'Delivered';
        
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'dakshithtechnologies.com';  // Specify main and backup SMTP servers
        //$mail->SMTPAuth = false;
        //$mail->SMTPSecure = false;                              // Enable SMTP authentication
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'test@dakshithtechnologies.com';                 // SMTP username
        $mail->Password = '6oDjV]fV.m~z';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->addCustomHeader('X-custom-header', 'custom-value');
        $mail->setFrom('info@dakshithtechnologies.com', 'Green Seller');
        //$mail->addAddress($email, $row[name]);     // Add a recipient
        $mail->addAddress($email, 'ravi');     // Add a recipient
        // $mail->addAddress('info@dakshithtechnologies.com');               // Name is optional
        // $mail->addReplyTo('info@dakshithtechnologies.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = 'Your Status';
        $mail->Body    = '<p style = "color : red">Your Order Status is: '.$status.'</p>';
        $mail->AltBody = 'Your Order Status is: '.$status;
        
        if(!$mail->send()) {
        	//echo json_encode(0);
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo; die;
        } else {
        	//echo json_encode(1);
            //echo 'Message has been sent';
        }
    }
    
    function sendMailforStatus4($email,$status){
    
    	require 'PHPMailer/PHPMailerAutoload.php';
    
        //$email = $_POST['email'];//
        //$email = "rvdaktec@gmail.com";
        
        // $sql = "SELECT * FROM `users` WHERE `email`='$email'";
        // $sql = "SELECT * FROM `temporder` WHERE `email`='$email'";
        
        // $check = mysqli_query($connection,$sql);
        // $row = mysqli_fetch_assoc($check);
        
        // $status = $row['status'];
        $status = 'Canceled';
        
        $mail = new PHPMailer;
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'dakshithtechnologies.com';  // Specify main and backup SMTP servers
        //$mail->SMTPAuth = false;
        //$mail->SMTPSecure = false;                              // Enable SMTP authentication
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'test@dakshithtechnologies.com';                 // SMTP username
        $mail->Password = '6oDjV]fV.m~z';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->addCustomHeader('X-custom-header', 'custom-value');
        $mail->setFrom('info@dakshithtechnologies.com', 'Green Seller');
        //$mail->addAddress($email, $row[name]);     // Add a recipient
        $mail->addAddress($email, 'ravi');     // Add a recipient
        // $mail->addAddress('info@dakshithtechnologies.com');               // Name is optional
        // $mail->addReplyTo('info@dakshithtechnologies.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        
        $mail->Subject = 'Your Status';
        $mail->Body    = '<p style = "color : red">Your Order Status is: '.$status.'</p>';
        $mail->AltBody = 'Your Order Status is: '.$status;
        
        if(!$mail->send()) {
        	//echo json_encode(0);
            // echo 'Message could not be sent.';
            // echo 'Mailer Error: ' . $mail->ErrorInfo; die;
        } else {
        	//echo json_encode(1);
            //echo 'Message has been sent';
        }
    }

