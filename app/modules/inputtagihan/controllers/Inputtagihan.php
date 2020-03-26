<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class Inputtagihan extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if(!$this->alus_auth->logged_in())
		{
			redirect('admin/Login','refresh');
		}
		$this->load->model('tagihan_model');
	}

	public function index()
	{

		if($this->alus_auth->logged_in())
         {
         	$head['title'] = "Operator";

		 	$data['groups'] = $this->tagihan_model->getDataGrup();
		 	$data['tagihan'] = $this->tagihan_model->getDataTagihan();
		 	$this->load->view('template/temaalus/header',$head);
		 	$this->load->view('index',$data);
		 	$this->load->view('template/temaalus/footer');
		}else
		{
			redirect('admin/Login','refresh');
		}
	}

	public function save()
	{
		$data=$_POST['grup'];
		$grups=$this->tagihan_model->getdata($data);
		$billname=$_POST['namabill'];
        $price=$_POST['harga'];
        $keterangan="belum dibayar";
        $pesan=$_POST['message'];
        $index=0;
        foreach($grups as $dataid)
         {
         	$user = $dataid->username[$index];
            array_push($datatagihan,array(
                'tt_nama'=>$user,
                'tt_tagihan'=>$billname,
                'tt_jumlah'=>$price,
                'keterangan'=>$keterangan,
                'tt_deskripsi'=>$pesan,
            ));
            $index++; 
         }
         $this->db->insert_batch('t_tagihan',$datatagihan);
	 }
}
/* End of file  Home.php */
/* Location: ./application/controllers/ Home.php */