<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_login extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->model('Mlogin');
    $this->load->helper('url');
	
	
    }
    public function index(){
        $this->load->view('login');
    }

    public function login_action()
    {
        $u = $this->input->post('nama');
        $p = $this->input->post('password');
        $where = array('nama' => $u);

        $cek = $this->Mlogin->login('user', $where);
        $Pass = $cek->row();
        if ($cek->num_rows() == 1 && $p==$Pass->Password) {
            $data_session = array(
                'nama_user' => $u,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);

            if  ($Pass->Level=='admin'){
                redirect('Controller_Dashboard');
            }
            else {
                redirect('Controller_Dashboard_Costumer');
            }
        } else {
            $this->session->set_flashdata('msg', 'Username atau Password Salah');
            redirect("Controller_login");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Controller_login');
    }
}
?>