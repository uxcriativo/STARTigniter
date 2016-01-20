<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clean extends CI_Controller  {
	
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
		$this->load->view('clean.php');
	}
	
}
