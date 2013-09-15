<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  User extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}


	public function login()
	{
		echo 'login form<br />';
		var_dump($this->ion_auth->user()->row());
	}
}