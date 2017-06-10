<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mail testing</title>
		<link href="http://bootswatch.com/lumen/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="resume.css">
	</head>
<?php
$action=$_REQUEST['action'];
if ($action=="")
    {
    ?>
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-3 col-md-offset-3">
    <form  action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <input type="hidden" name="action" value="submit">
    Mail address:<br>
    <input name="email" type="text" value="" size="30"/><br>
    HTML content:<br>
    <textarea name="message" rows="7" cols="30"><?php echo $text; ?></textarea><br>
    <input type="submit" value="Send email"/>
    </div>
    </div>
    </div>
    </div>
    </form>
    <?php
    }
else
    {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    $subject="Test email";
	  mail($email, $subject, $message, $headers);
		echo "Done.";
    }
?>
