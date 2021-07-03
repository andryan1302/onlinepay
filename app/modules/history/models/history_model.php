<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class history_model extends CI_Model {
    public function gethistory($username)
    {
        $this->db->from('history');
        $this->db->where('nama',$username);
        return $this->db->get()->result();
    } 
}