<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_transaksi extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->model('Mcrud');
	$this->load->helper('url');
	$this->load->library('template');
		
	}
	public function index()
	{
		$data['buku'] = $this->Mcrud->data_transaksi()->result();
		$this->template->load('Costumer_panel', 'tabel_transaksi', $data);
	}
    public function tambah_transaksi()
	{
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');

        $nama = $this->session->userdata('nama_user');
		$id_buku = $this->input->post('id_buku');
		$jumlah = $this->input->post('jumlah');

		$data_transaksi=array(
			'nama_user' => $nama,
			'tanggal' => $tanggal
		);

        $this->Mcrud->insert('transaksi', $data_transaksi);
        $id_transaksi = $this->db->insert_id();

        $data_detail_transaksi =array(
			'id_transaksi' => $id_transaksi, 
			'id_buku' => $id_buku,
			'Jumlah_beli' => $jumlah
		);

		$this->Mcrud->insert('detail_transaksi', $data_detail_transaksi);

		redirect('Controller_transaksi');
	}

	
}
