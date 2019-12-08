<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
        $this->load->view('landing');

    }

    public function jadwal()
    {
        $this->load->view('jadwal');

    }

    public function daftar()
    {
        $this->load->view('daftar');
    }

    public function createUser()
    {
        $this->load->model('AuthModel');
        $this->AuthModel->insertUser();
        redirect('/', 'refresh');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function cekLogin()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDB');
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $session_data = $this->session->userdata('logged in');
            if ($session_data['status'] != 'user') {
                redirect('/admin', 'refresh');
            } else {
                redirect('/', 'refresh');
            }
        }
    }

    public function cekDB($password)
    {
        $this->load->model('AuthModel');
        $username = $this->input->post('username');
        $result = $this->AuthModel->login($username, $password);
        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username,
                    'nama' => $row->nama,
                    'status' => $row->status,
                );
                $this->session->set_userdata('logged in', $sess_array);
            }
            return true;
        } else {
            $this->form_validation->set_message('cekDB', "Login gagal Username Password tak valid");
            return false;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged in');
        $this->session->sess_destroy();
        redirect('/', 'refresh');
    }

    public function aboutus()
    {
        $this->load->view('aboutus');

    }

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
