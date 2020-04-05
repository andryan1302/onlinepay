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
		$data = $_POST['grup'];
		$grup = $this->tagihan_model->getdata($data);
		$namatagihan=$_POST['namabill'];
		$harga=$_POST['harga'];
		$deskripsi=$_POST['massage'];
		$keterangan="belum dibayar";
		$data2=array();
		$index=0;
		foreach ($grup as $key => $value){
		if($key==$index)
		{
			array_push($data2,array('tt_nama'=>$value->username,'tt_tagihan'=>$namatagihan,'tt_jumlah'=>$harga,'tt_deskripsi'=>$deskripsi,'keterangan'=>$keterangan));
			$index++;
		}}
		$insert = $this->db->insert_batch('t_tagihan',$data2);
		if($insert)
		{
			echo "Berhasil"; 
		}
		else
		{
			echo "Gagal";
		}
	}
}
/* End of file  Home.php */
/* Location: ./application/controllers/ Home.php */