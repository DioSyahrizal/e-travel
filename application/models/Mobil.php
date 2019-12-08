<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Model
{
    public function tampilDataMobil()
    {
        $query = $this->db->query("SELECT * FROM travel");
        return $query->result();
    }

    public function createTravel()
    {
        $object = array('nama' => $this->input->post('nama'),
            'tipe_mobil' => $this->input->post('tipe_mobil'),
            'kapasitas' => $this->input->post('kapasitas'),
        );
        $this->db->insert('travel', $object);
    }

    public function deleteTravel($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('travel');
    }

}

/* End of file Travel.php */
