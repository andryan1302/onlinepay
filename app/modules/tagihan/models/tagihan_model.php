<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class tagihan_model extends CI_Model {

    public function getAll()
    {
        $this->db->from('t_tagihan');
        $this->db->where('tt_nama',$this->session->userdata('username'));
        $query = $this->db->get();
        return $query->result();
    }
}