<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alus_items extends CI_Model {

	var $table = 'm_grup';
    var $mg_idtable = 'mg_id';
    var $column_order = array(
        'mg_id',
        'nama_g',
        'deskripsi'        
        );
    var $column_search = array(
        'mg_id',
        'nama_g',
        'deskripsi'  
        );
    var $order = array('mg_id' => 'ASC');

    /* Server Smg_ide Data */
	/* Modified by : Maulana.code@gmail.com */

    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    /* end server smg_ide  */

    function getmg_id($mg_id)
    {
        $this->db->where($this->mg_idtable, $mg_id);
        return $this->db->get($this->table)->result();
    }

    function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function edit($data)
    {
        $this->db->where($this->mg_idtable, $this->input->post($this->mg_idtable));
        return $this->db->update($this->table, $data);
    }

    function delete($mg_id)
    {
        $this->db->where($this->mg_idtable, $mg_id);
        return $this->db->delete($this->table);
    }
}