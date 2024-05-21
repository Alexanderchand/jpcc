
<?php
$to = $_POST["email_id"];
$subject = "HTML email";
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>I am ".$_POST["full_name"]."</p>
<p> Mobile No is: +91".$_POST["mobile_no"]."</p>
<p>" . $_POST["msg"]."</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <babuchandu977@gmail.com>' . "\r\n";
$headers .= 'Cc: info@jpccgroup.com' . "\r\n";

// mail($to,$subject,$message,$headers);
?>