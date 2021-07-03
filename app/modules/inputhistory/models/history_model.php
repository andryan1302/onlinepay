<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class history_model extends CI_Model {

    public function getAll()
    {
        $this->db->from('m_kelas');
        $query = $this->db->get();
        return $query->result();
    }
    public function getAllmurid($id)
    {
        $this->db->from('t_kelas');
        $this->db->join('alus_u','alus_u.id=t_kelas.user_id');
        $this->db->where('kelas_id',$id); 
        $query = $this->db->get();
        return $query->result();
    }

    public function gethistory($username)
    {
        $this->db->from('history');
        $this->db->where('nama',$username);
        return $this->db->get()->result();
    } 

    public function updateselesai($ids){
        $post = $this->input->post();
        $this->keterangan      = "selesai";
        $this->db->update('history',$this,array('history_id' => $ids));
        
    }
}