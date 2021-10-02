<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginPtbr extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->lang->load("login", "ptbr");
    }

	public function index()
	{
		$this->load->view('loginptbr');
	}
}
?>
