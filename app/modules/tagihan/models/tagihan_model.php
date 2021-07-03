<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class tagihan_model extends CI_Model {
    private $table2="history";
    private $table3="t_tagihan";
    public function getAll()
    {
        $this->db->from('t_tagihan');
        $this->db->where('tt_nama',$this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result();
    }

    public function getbayaran($id)
    {
        $this->db->from('t_tagihan');
        $this->db->where('tt_id',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function checkout(){
       $id=$this->input->post('idhapus');
        $data = array
        (
              'history_id' => $this->input->post('dataid'),
              'nama' => $this->input->post('username'),
              'tagihan' => $this->input->post('nama_tagihan'),
              'tanggal' => $this->input->post('tanggal'),
              'jumlah' => $this->input->post('harga'),
              'deskripsi' => $this->input->post('deskripsis'),
              'metode_pembayaran' => $this->input->post('metode'),
              'keterangan' => "Proses",
              
        );
        $this->db->insert($this->table2,$data);
        $this->db->where("tt_id",$id);
        return $this->db->delete($this->table3);
    }
}