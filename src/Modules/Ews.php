<?php
namespace Intelisys\PhpEws\Modules;

use \Intelisys\PhpEws\Client;

class Ews
{

	# SETUP CORE PROPERTIES
	private $client;
	private $version;
	private $username;
	private $password;


	/**********************************************
	* __construct
	* ----------
	* PARAMETERS
	*  username: The exchange username format as: domain\username
	*  password: The exchange password
	*  host: 		 The related exchange host.
	**********************************************/
	public function __construct($username, $password, $host, $version) {
		if ($version == '') {
		 	$this->version = Client::VERSION_2010_SP2;
		}
		else {
			$this->version = $version; //Version will not be the constant at this time.
		}
		if (!empty($username) && !empty($password) && !empty($host)) {
			$this->$username = $username;
			$this->$password = $password;
			$this->client = new Client($host, $username, $password, $this->version);		
		} 
		else {
			trigger_error("A username, password, and host must be provided.", E_USER_ERROR);
		}
	}
	// end standard class items //


	//-----------------------------------------------------------//
	//--------------------  BEGIN METHODS -----------------------//
	//-----------------------------------------------------------//
	
	public function getClient() {
		return $this->client;
	}
} //End Ews Class.
?>