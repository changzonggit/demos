<?php
	class QQlogin{
		protected $codeUrl = "https://graph.qq.com/oauth2.0/authorize";
		protected $tokenUrl = "https://graph.qq.com/oauth2.0/token";
		protected $openIdUrl = "https://graph.qq.com/oauth2.0/me";
		protected $backurl = "http://www.iwebshop.com/index.php";
		protected $get_user_info = "https://graph.qq.com/user/get_user_info";
		protected $appid = "101353491";
		protected $appsecret = "df4e46ba7da52f787c6e3336d30526e4";
		public function __construct()
		{
			
		}
		public function getCode(){
			$url = "";
			$backurl = urlencode($this->backurl);
    		$arr = array(
				'response_type'	=> 'code',
				'client_id'		=> '101353491',
				'redirect_uri'	=> $backurl,
				'state'			=> 1,
				'scope'			=> 'get_user_info,get_info',
			);
			$strparams = $this->handleData($arr);	
			$url = $this->codeUrl."?".$strparams;
			return $url;
		}
		public function getToken($code){

			$backurl = urlencode($this->backurl);
    		$arr = array(
				'grant_type'	=> 'authorization_code',
				'client_id'		=> $this->appid,
				'client_secret'	=> $this->appsecret,
				'code'			=> $code,
				'redirect_uri'	=> $backurl,
			);
			$strparams = $this->handleData($arr);	
			$url = $this->tokenUrl."?".$strparams;

			$arr = $this->sendUrl($url);
			// var_dump($arr);die;
			$arrInfo = explode("&", $arr);
			return explode("=",$arrInfo[0])[1];
		}	
		public function getOpenId($token){
    		$url = $this->openIdUrl."?access_token={$token}";
    		$str = $this->sendUrl($url);
    		if (strpos($str, "callback") !== false) {
				$lpos = strpos($str, "(");
				$rpos = strrpos($str, ")");
				$str = substr($str, $lpos + 1, $rpos - $lpos - 1);
			}
			$user = json_decode($str,TRUE);
			return $user;
		}	
		public function getUserinfo($openid,$token){
			$appid = $this->appid;
				$arr = array(
					'access_token'=>$token,
					'oauth_consumer_key'=>$appid,
					'openid'=>$openid,
					'format'=>'json',
				);
			$strparams = $this->handleData($arr);	
			$url = $this->get_user_info."?".$strparams;
			$arr = $this->sendUrl($url);
			return $arr;
		}
		public function sendUrl($url){
    		$ch = curl_init();
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

				curl_setopt($ch, CURLOPT_URL, $url);

				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

				//设置超时时间为3s
				curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

				$result = curl_exec($ch);
				// var_dump($result);die;
				return $result;
		}		
		/*处理数组*/
		private function handleData($arr){
			$strparams = '';
			foreach ($arr as $key => $value) {
				$strparams.=$key."=".$value."&";
			}
			$strparams = substr($strparams,0,-1);
			return $strparams;
		}
	}
?>