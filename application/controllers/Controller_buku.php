<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_buku extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->model('Mcrud');
	$this->load->helper('url');
	$this->load->library('template');
		
	}
	public function index()
	{
		$data['buku'] = $this->Mcrud->get_all_data('buku')->result();
		$this->template->load('Admin_panel', 'tabel_buku', $data);
	}

	public function tambah_buku()
	{
		$Judul_buku = $this->input->post('Judul_buku');
		$Harga_buku = $this->input->post('Harga_buku');
		$Stok_buku = $this->input->post('Stok_buku');

		$data=array(
			'Judul_buku' => $Judul_buku, 
			'Harga_buku' => $Harga_buku,
			'Stok_buku' => $Stok_buku
		);

		$this->Mcrud->insert('buku', $data);

		redirect('Controller_buku');
	}

	public function edit_buku()
	{
		$id = $this->input->post('id_buku');
		$Judul_buku = $this->input->post('Judul_buku');
		$Harga_buku = $this->input->post('Harga_buku');
		$Stok_buku = $this->input->post('Stok_buku');

		$data=array(
			'Judul_buku' => $Judul_buku, 
			'Harga_buku' => $Harga_buku,
			'Stok_buku' => $Stok_buku
		);

        $this->Mcrud->update('buku', $data, 'id_buku', $id);
        redirect('Controller_buku');
	}

	public function hapus_buku($id)
	{
		$where = array('id_buku'=>$id);
		$this->Mcrud->del_data('buku', $where);
        redirect('Controller_buku');
	}
}
