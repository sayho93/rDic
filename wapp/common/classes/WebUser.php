<? include $_SERVER["DOCUMENT_ROOT"] . "/common/classes/WebBase.php" ;?>
<?php
if(! class_exists("WebUser") )	{

	class WebUser extends Common {
		function __construct($req) {
			parent::__construct($req);
		}

		//web login
		function userLogin() {
		    $request = $this->lnFn_Common_CrPost(array("account" => $this->req["userID"], "password" => md5($this->req["userPwd"]) ));
			$actionUrl = "{$this->serverRoot}/web/login";
			$retVal = $this->postData($actionUrl, $request);

            $userInfo = json_decode($retVal)->data;
            LoginUtil::doWebLogin($userInfo);

			return $retVal;
		}

	}
}
?>