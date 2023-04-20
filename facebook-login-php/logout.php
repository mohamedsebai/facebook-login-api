<?php
/*
=*****************
coding by : mohamed sebai mohamed
facebook: https://www.facebook.com
linkdin: in/arrogantm
website: arrogantm.com
*/

require_once 'config.php';

unset($_SESSION['facebook_access_token']);


unset($_SESSION['fb_user_id']);
unset($_SESSION['fb_user_name']);
unset($_SESSION['fb_user_email']);
unset($_SESSION['fb_user_pic']);


header("Location:index.php");
?>
