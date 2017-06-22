<?php
class gitHandler
{
	protected $user = null;
  protected $token = null;
	public function __construct()
	{
		$this->user = 'AWheelMonkey';
		$this->token = '590ec3cfecbadb4ad58e44693064ae56d309dc17';
	}
	public function login()
	{
		$apiSect = "user";
	}
  public function getAllRepos()
  {


		$params = array(
						'username' => $this->user,
						'token' => $this->token);

						foreach ($params as $param)
						{
							echo "<p>".$param."</p>";
						}

	}
	/* @array:  terms[
			@ name=> string
			@ description => string
	]*/
  public function createRepo($terms)
  {
		$apiSect = "/user/repos";
		$result = $this->makeCall($apiSelect,$terms);
  }
	/*validation to be performed before here!*/
  public function searchRepo($searchterm)
  {
		$apiSect = "/search/repositories";
		$params = array(
			"p" => $searchterm
		);
		$result = $this->makeCall($apiSect,$params);

  }
  public function vote($score)
  {
		/*db for this? */
  }
	/*should make a function for each call:
	makeGetCall()
	makePostCall()
	etc..
	*/
  public function makeCall($urlSect, $params)
  {
		/*
			check here to see if $params is empty
		*/

		$url = "https://api.github.com" . $urlSect;



		$ch = curl_init();
		/*based on https://stackoverflow.com/questions/28858351/php-ssl-certificate-error-unable-to-get-local-issuer-certificate
			major issues trying to get curl to work with easy php dev
		*/
		$certificate_location = "****doesn't work";
		$options = array(
		    CURLOPT_URL            => $html_brand,
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_HEADER         => true,
		    CURLOPT_FOLLOWLOCATION => true,
		    CURLOPT_ENCODING       => "",
		    CURLOPT_AUTOREFERER    => true,
		    CURLOPT_CONNECTTIMEOUT => 120,
		    CURLOPT_TIMEOUT        => 120,
		    CURLOPT_MAXREDIRS      => 10,
				CURLOPT_CAINFO				 => "doesn't work",
				CURLOPT_CAPATH				 => "doesn't work",
		);

		/*
		"username"						 => $this->username,
		"token"								 => $this->token,
		*/

		curl_setopt_array( $ch, $options );
		$response = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		if ( $httpCode != 200 ){
		    echo "Return code is {$httpCode} \n"
		        .curl_error($ch);
		} else {
		    echo "<pre>".$response."</pre>";
		}

		curl_close($ch);

	}
}
  ?>
