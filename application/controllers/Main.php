<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function main(){ 
		parent::__construct();
	}

	public function index(){
		$this->load->view('welcome_message');
	}

	
}
