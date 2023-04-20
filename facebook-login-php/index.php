<?php


/*
=*****************
coding by : mohamed sebai mohamed
facebook: https://www.facebook.com
linkdin: in/arrogantm
website: arrogantm.com
*/

require_once 'config.php';

// replace your website URL same as redirect url added to your facebook Developer
// you will find it in  facebook login then chosse setting then get url from redirect url input
$permissions = ['email']; //optional
$fb_login_url = $fb_helper->getLoginUrl(FB_Redirect_URL, $permissions);

?>
<?php
// if there is Noooooooooo login in your computer or phone
if(!isset($_SESSION['fb_user_id'])):
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login with Facebook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="<?php echo BASE_URL; ?>css/style.css" rel="stylesheet">
</head>
<body>
	<div class="login-form">
		<form action="" method="post">
			<h2 class="text-center">Sign in</h2>
			<div class="text-center social-btn">
				<a href="<?php echo $fb_login_url;?>" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b></a>
			</div>
</body>
</htlm>
<?php
else:
  header("Location: ". FB_Redirect_URL . "");
  die;
endif;

 ?>
