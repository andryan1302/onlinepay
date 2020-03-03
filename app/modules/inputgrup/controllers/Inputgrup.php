<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class Inputgrup extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->alus_auth->logged_in())
		{
			redirect('admin/Login','refresh');
		}
		$this->load->model('grup_model');
	}
	public function index()
	{

		if($this->alus_auth->logged_in())
         {
         	$head['title'] = "Operator";

		 	$this->load->view('template/temaalus/header',$head);
		 	$this->load->view('operator-page');
		 	$this->load->view('template/temaalus/footer');
		}else
		{
			redirect('admin/Login','refresh');
		}
	}
	function error404()
	{
		if($this->alus_auth->logged_in())
         {
         	$head['title'] = "Ups Page Not Found";

		 	$this->load->view('template/temaalus/header',$head);
		 	$this->load->view('template/temaalus/404');
		 	$this->load->view('template/temaalus/footer');
		}else
		{
			redirect('admin/Login','refresh');
		}
	}
	function tambahmurid()
	{
		$head['title'] = "Tambah Murid";

		$data["produks"] = $this->grup_model->getById();
		
		$this->load->view('template/temaalus/header',$head);
		$this->load->view('murid',$data);
		$this->load->view('template/temaalus/footer');
	}
}

/* End of file  Home.php */
/* Location: ./application/controllers/ Home.php */