<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class grup_model extends CI_Model {
    private $_table = "alus_u";

    public function getAll()
    {
        return $this->db->get('alus_u')->result();
    }
        public function getById()
    {
        return $this->db->query("SELECT * from alus_u where grup like '-' ")->result();
    }
}