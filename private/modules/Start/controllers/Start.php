<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends APP_Public  {
	
	function __construct()
	{
		parent::__construct();
		
		
	}
	
	
	public function index()
	{		
		
	
	}
	
	/**
	 * REMAP MODE
	 */
	public function _remap()
	{
		
		$this->load->view('common/head.php');
		$this->load->view('partials/navbar.php');
		$this->load->view('partials/header.php');
		$this->load->view('partials/body.php');
		$this->load->view('partials/footer.php');
		$this->load->view('common/foot.php');
	}
	
}
