require 'libs/fb-php-sdk/facebook.php';

// Create our Application instance
$facebook = new Facebook(array(
  'appId'  => '123',
  'secret' => '123'
));

// Get User ID
$user = $facebook->getUser();

// Get Login URL
$loginUrl = $facebook->getLoginUrl(array(
    "scope" => "email,user_education_history,user_work_history",
    "redirect_uri" => "http://www.mydomain.com/login/facebook_connect/"
));

$data['fb_login_url'] = $loginUrl;

$this->load->view('splash', $data);

require 'libs/fb-php-sdk/facebook.php';

    $facebook = new Facebook(array(
        'appId'  => '123',
        'secret' => '123',
    ));

    // See if there is a user from a cookie
    $user = $facebook->getUser();

    // We may or may not have this data based on whether the user is logged in.
    //
    // If we have a $user id here, it means we know the user is logged into
    // Facebook, but we don't know if the access token is valid. An access
    // token is invalid if the user logged out of Facebook.

    if ($user) {
      try {
        // Proceed knowing you have a logged in user who's authenticated.
        $user_profile = $facebook->api('/me');
      } catch (FacebookApiException $e) {
        error_log($e);
        $user = null;
      }
    }

    print_r($user_profile);
    echo $user;
