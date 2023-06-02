
<?php



class AuthModel extends Model
{
  public $data = array();
  public $client;


  public function __construct()
  {
    # code...    
    $this->client = new Google\Client();

    $this->client->setAuthConfig("client_credentials.json");

    $this->client->setScopes(array(
      'https://www.googleapis.com/auth/plus.login',
      'profile',
      'email',
      'openid',
    ));
  }

  public function login()
  {
    # code...

    if (isset($_GET['code'])) {
      $token = $this->client->fetchAccessTokenWithAuthCode($_GET['code']);

      if (!isset($token['error'])) {
        $this->client->setAccessToken(($token['access_token']));
        $oauth2 = new Google\Service\Oauth2($this->client);
        $userInfo = $oauth2->userinfo->get();


        if ($this->get_list("SELECT * FROM `admin` WHERE email = '" . $userInfo['email'] . "'")) {

          $_SESSION['access_token'] = $token['access_token'];

          $this->update_value("admin", ['access_token' =>  $_SESSION['access_token']], "email = '" . $userInfo['email'] . "'");

          $_SESSION['user_data'] = json_decode(json_encode($userInfo), true);
        }
      }
    }


    if (!isset($_SESSION['access_token'])) {
      $this->client->setHostedDomain('fpt.edu.vn');
      $this->client->setPrompt('select_account');
      $this->data['authUrl'] = $this->client->createAuthUrl();
    } else {
      header('Location: ' . BASE_URL('admin'));
      exit();
    }
  }
}
