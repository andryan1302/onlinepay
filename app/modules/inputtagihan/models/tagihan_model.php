<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class tagihan_model extends CI_Model {
    private $table = "alus_u";
    private $table2 = "m_grup";

    public function getDataGrup()
    {
    	return $this->db->get('m_grup')->result();
    }
    public function getDataTagihan()
    {
    	return $this->db->get('m_tagihan')->result();
    }
    public function getdata($data)
    {
        $this->db->from('t_grup');
        $this->db->join('t_kelas','t_grup.kelas_id=t_kelas.kelas_id');
        $this->db->join('alus_u','t_kelas.user_id=alus_u.id');
        $this->db->where('group_id',$data); 
        $query = $this->db->get();
        return $query->result();
    }
}
