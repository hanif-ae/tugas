<?php
class M_Spp extends CI_Model {
    function data_spp(){
        $query = $this->db->query("select * from spp");
        return $query;
    }

    function simpan(){
        $data = array('id_spp' => $this->input->post('id_spp'),
                'tahun' => ($this->input->post('tahun')),
                'nominal' => $this->input->post('nominal'));
        $insert = $this->db->insert('spp',$data);
    }
}