<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{
    public function insertUser()
    {
        $object = array('username' => $this->input->post('username'),
            'password' => MD5($this->input->post('password')),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'status' => $this->input->post('status'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'ttl' => $this->input->post('ttl'),
        );
        $this->db->insert('user', $object);
    }

    public function login($username, $password)
    {
        $this->db->select('id,username,password,nama,status');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}

/* End of file AuthModel.php */
