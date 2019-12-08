<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function saldo($id)
    {
        $this->db->select('saldo');
        $this->db->from('user');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function isiSaldo($id)
    {
        $object = array(
            'id_user' => $id,
            'saldo' => $this->input->post('saldo'),
            'status' => 'request',
        );
        $this->db->insert('isisaldo', $object);
    }

    public function viewSaldo()
    {
        $this->db->select('id,id_user,saldo,status');
        $this->db->from('isisaldo');
        $this->db->where('status', 'request');
        $query = $this->db->get();
        return $query->result();
    }

    public function viewPaket()
    {
        $this->db->select('id,nama_paket,fitur,harga');
        $this->db->from('paket');
        $query = $this->db->get();
        return $query->result();
    }

    public function viewList($id)
    {
        $this->db->select('id,nama_paket,fitur,harga');
        $this->db->from('paket');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function addSaldo($id, $id_user, $saldo)
    {
        $data = array(
            'id' => $id,
            'id_user' => $id_user,
            'saldo' => $saldo,
            'status' => 'Accept',
        );
        $this->db->where('id', $id);
        $this->db->update('isisaldo', $data);

        $this->db->select('saldo');
        $this->db->from('user');
        $this->db->where('id', $id_user);
        $query = $this->db->get();
        $hasil = $query->result();

        $data = array(
            'saldo' => $saldo + $hasil[0]->saldo,
        );
        $this->db->where('id', $id_user);
        $this->db->update('user', $data);

    }

    public function rejectSaldo($id)
    {
        $data = array(
            'status' => 'Accept',
        );
        $this->db->where('id', $id);
        $this->db->update('isisaldo', $data);
    }

}

/* End of file UserModel.php */
