<?php
class M_Transaksi extends CI_Model {
    function data_transaksi(){
        $query = $this->db->query("select * from pembayaran");
        return $query;
    }

    function simpan(){
        $data = array('id_pembayaran' => $this->input->post('id_pembayaran'),
                'id_petugas' => $this->input->post('id_petugas'),
                'nisn' => $this->input->post('nisn'),
                'tgl_bayar' => $this->input->post('tgl_bayar'),
                'bulan_dibayar' => $this->input->post('bulan_dibayar'),
                'tahun_dibayar' => $this->input->post('tahun_dibayar'),
                'id_spp'  => $this->input->post('id_spp'),
                'jumlah_bayar' => $this->input->post('jumlah_bayar'));
        $insert = $this->db->insert('pembayaran',$data);
    }
}