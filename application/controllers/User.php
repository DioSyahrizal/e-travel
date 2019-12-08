<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //    $this->load->model('pegawai_model');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index()
    {

    }

    public function isisaldo()
    {
        $session_data = $this->session->userdata('logged in');
        $data['id'] = $session_data['id'];
        $this->load->model('UserModel');
        $tampil['saldo'] = $this->UserModel->saldo($data['id']);
        $this->load->view('user/isisaldo', $tampil);
    }

    public function saldoRequest()
    {
        $session_data = $this->session->userdata('logged in');
        $data['id'] = $session_data['id'];
        $this->load->model('UserModel');
        $this->UserModel->isiSaldo($data['id']);
        redirect('/', 'refresh');
    }

    public function travel()
    {
        $this->load->model('UserModel');
        $data['travel'] = $this->UserModel->viewPaket();
        $this->load->view('travel', $data);
    }

    public function review($id)
    {
        $this->load->model('UserModel');
        $data['travel'] = $this->UserModel->viewList($id);
        $this->load->view('detail', $data);
    }
}

/* End of file User.php */
