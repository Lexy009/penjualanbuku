<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_buku_Costumer extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->model('Mcrud');
	$this->load->helper('url');
	$this->load->library('template');
		
	}
	public function index()
	{
		$data['buku'] = $this->Mcrud->get_all_data('buku')->result();
		$this->template->load('Costumer_panel', 'tabel_buku_costumer', $data);
	}

}