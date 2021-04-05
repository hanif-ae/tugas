<?php
class M_Kelas extends CI_Model {
    function data_kelas(){
        $query = $this->db->query("select * from kelas");
        return $query;
    }

    function simpan(){
        $data = array('id_kelas' => $this->input->post('id_kelas'),
                'nama_kelas' => ($this->input->post('nama_kelas')),
                'id_kelas' => ($this->input->post('id_kelas')),
                'kompetensi_keahlian' => $this->input->post('kompetensi_keahlian'));
        $insert = $this->db->insert('kelas',$data);
    }
}