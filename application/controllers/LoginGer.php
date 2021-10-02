<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginGer extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->lang->load("login", "ger");
    }

	public function index()
	{
		$this->load->view('loginger');
	}
}
