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
}