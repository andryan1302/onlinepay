<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class grup_model extends CI_Model {
    private $table = "alus_u";
    private $table2 = "m_grup";
    private $mg_id;
    private $nama_g;
    private $deskripsi;

    public function getAll()
    {
        return $this->db->get('m_grup')->result();
    }
    
    public function getAllkelas()
    {
        return $this->db->get('m_kelas')->result();
    }
    
    public function getanggota($mg_id)
    {
    	 return $this->db->query("SELECT * from m_kelas INNER JOIN t_grup ON m_kelas.mk_id=t_grup.kelas_id where group_id=$mg_id ")->result();
    }
    
    public function deleteanggota($id)
    {
        $this->db->where("id",$id);
        return $this->db->delete('t_grup');
    }
    
    public function delete($id)
    {
        $this->db->where("mg_id",$id);
        return $this->db->delete($this->table2);
    }

    public function save()
    {
        $data = array
        (
                'mg_nama' => $this->input->post('group_nama'),
                'mg_deskripsi' => $this->input->post('des_group')
        );
        $this->db->insert($this->table2,$data);
        $lastid = $this->db->insert_id();
        $id = $_POST['kelas'];
        $data = array();
        $index=0;
        foreach($id as $dataid)
        {
            array_push($data,array(
                'kelas_id'=>$dataid ,
                'group_id'=>$lastid,
            ));
            $index++;
        }   
        $this->db->insert_batch('t_grup',$data);
    }
       
    public function update(){
        $id = $this->input->post('ids');
        $post = $this->input->post();
        $this->mg_nama      = $post["group_nama"];
        $this->mg_deskripsi   = $post["des_group"];
        $this->db->update('m_grup',$this,array('mg_id' => $id));
    }
}