<?php
use Facebook\Facebook;


class FacebookAuth{
  	protected $facebook;
		protected $facebookUrl = "http://localhost:8080/callback.php";

		public function __construct(Facebook $facebook){
			$this->facebook = $facebook;
		}

		public function getHelper(){
			return $this->facebook->getRedirectLoginHelper();
		}

    public function getAuthUrl(){
      // return $this->getHelper()->getLoginUrl($this->facebookUrl);
      return $this->getHelper()->getLoginUrl($this->facebookUrl);
    }

    public function isLogin(){
      return isset($_SESSION['id_facebook']);
    }
}
