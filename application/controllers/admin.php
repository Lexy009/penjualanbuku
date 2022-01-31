<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->library('template');
        if (empty($this->session->userdata('user_admin'))) {
            redirect('Login_admin');
        }
    }

    public function index()
    {
        $data['user_admin'] = $this->session->userdata('user_admin');
        $data['transaksi'] = $this->Mcrud->get_all_data('transaksi')->num_rows();
        $data['laptop'] = $this->Mcrud->get_all_data('laptop')->num_rows();
        $data['user'] = $this->Mcrud->get_all_data('user')->num_rows();
        $data['total_penjualan'] = $this->Mcrud->get_all_data('detail_transaksi')->result();
        $data['data_area_chart'] = $this->Mcrud->get_all_data('transaksi')->result();
        $data['jf'] = "Dashboard Admin";

        $this->template->load('layout_admin', 'admin/dashboard', $data);
    }

    public function user_data() {
        $data['user'] = $this->Mcrud->get_all_data('user')->result();
        $data['user_admin'] = $this->session->userdata('user_admin');
        $data['jf'] = "Dashboard Admin";

        $this->template->load('layout_admin', 'admin/table_user', $data);
    }
}
?>