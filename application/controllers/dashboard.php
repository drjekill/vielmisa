<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Dashboard extends CI_CONTROLLER
{
	public function __construct()
	{
		parent::__construct();
		//$this->layout->Layout('dashboard/layout');
	}

	public function index(){
		$this->load->view('dashboard/index');
	}

}	
