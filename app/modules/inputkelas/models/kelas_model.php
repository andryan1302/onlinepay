<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class kelas_model extends CI_Model {
    private $table2="m_kelas";

    public function getAllmurid()
    {
        $this->db->from('alus_u');
        $this->db->join('t_kelas', 'alus_u.id = t_kelas.user_id','LEFT');
        $this->db->where('user_id',null);
        $this->db->where('job_title','siswa');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllkelas()
    {
        $this->db->from('m_kelas');
        $query = $this->db->get();
        return $query->result();
    }

    public function getanggota($mg_id)
    {
    	 return $this->db->query("SELECT * from alus_u INNER JOIN t_kelas ON t_kelas.user_id=alus_u.id where kelas_id=$mg_id ")->result();
    }
    
    public function deleteanggota($id)
    {
        $this->db->where("tk_id",$id);
        return $this->db->delete('t_kelas');
    }

    public function save()
    {
        $data = array
        (
                'mk_nama' => $this->input->post('nama_kelas'),
                'mk_deskripsi' => $this->input->post('des_kelas')
        );
        $this->db->insert($this->table2,$data);
    }

    public function delete($id)
    {
        $this->db->where("mk_id",$id);
        return $this->db->delete($this->table2);
    }
           
    public function update(){
        $id = $this->input->post('ids');
        $post = $this->input->post();
        $this->mk_nama      = $post["nama_kelas"];
        $this->mk_deskripsi   = $post["des_kelas"];
        $this->db->update('m_kelas',$this,array('mk_id' => $id));
    }

    public function savemurid(){
        $id=$_POST['ids'];
        $murid = $_POST['murid'];
        $data = array();
        $index=0;
        foreach($murid as $datamurid)
        {
            array_push($data,array(
                'user_id'=>$datamurid ,
                'kelas_id'=>$id,
            ));
            $index++;
        }   
        $this->db->insert_batch('t_kelas',$data);
    }
}