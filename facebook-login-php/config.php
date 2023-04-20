<?php
/*
=*****************
coding by : mohamed sebai mohamed
facebook: https://www.facebook.com
linkdin: in/arrogantm
website: arrogantm.com
*/

 // Include the autoloader provided in the SDK
require_once(__DIR__.'/Facebook/autoload.php');

define('APP_ID', 'your-app-id');
define('APP_SECRET', 'secret_id');
define('API_VERSION', 'v2.5');

//redirect url
define('FB_Redirect_URL', 'http://localhost/facebook-login-php/red.php');
 // Your main domain for login page
define('BASE_URL', 'http://localhost/facebook-login-php/');

if(!session_id()){
    session_start();
}


// Call Facebook API
$fb = new Facebook\Facebook([
 'app_id' => APP_ID,
 'app_secret' => APP_SECRET,
 'default_graph_version' => API_VERSION,
]);


// Get redirect login helper
$fb_helper = $fb->getRedirectLoginHelper();


// Try to get access token
try {
    if(isset($_SESSION['facebook_access_token']))
		{$accessToken = $_SESSION['facebook_access_token'];}
	else
		{$accessToken = $fb_helper->getAccessToken();}
} catch(FacebookResponseException $e) {
     echo 'Facebook API Error: ' . $e->getMessage();
      exit;
} catch(FacebookSDKException $e) {
    echo 'Facebook SDK Error: ' . $e->getMessage();
      exit;
}

?>
