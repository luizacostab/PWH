<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginRu extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->lang->load("login", "ru");
    }

	public function index()
	{
		$this->load->view('loginru');
	}
}
