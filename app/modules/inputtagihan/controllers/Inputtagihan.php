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
}
/* End of file  Home.php */
/* Location: ./application/controllers/ Home.php */