<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Dashboard extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->model('Mcrud');
	$this->load->helper('url');
	$this->load->library('template');
		
	}
	public function index()
	{
		$this->template->load('Admin_panel', 'Dashboard');
	}

}