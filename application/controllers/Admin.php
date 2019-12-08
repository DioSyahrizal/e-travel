<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        // $this->load->library('cart');
    }

    public function index()
    {
        $this->load->model('mobil');
        $data['mobil'] = $this->mobil->tampilDataMobil();
        $this->load->view('admin/travel', $data);
    }

    public function createTravel()
    {
        $this->load->model('Mobil');
        $this->Mobil->createTravel();
        redirect('/admin', 'refresh');
    }

    public function deleteTravel($id)
    {
        $this->load->model('Mobil');
        $this->Mobil->deleteTravel($id);
        redirect('/admin', 'refresh');
    }

    public function saldo()
    {
        $this->load->model('UserModel');
        $tampil['saldo'] = $this->UserModel->viewSaldo();
        $this->load->view('admin/saldo', $tampil);
    }

    public function tambahsaldo($no, $id_user, $saldo)
    {
        $this->load->model('UserModel');
        $this->UserModel->addSaldo($no, $id_user, $saldo);
        redirect('admin/saldo', 'refresh');
    }

    public function gagalsaldo($id)
    {
        $this->load->model('UserModel');
        $this->UserModel->rejectSaldo($id);
        redirect('admin/saldo', 'refresh');
    }

}

/* End of file Admin.php */
