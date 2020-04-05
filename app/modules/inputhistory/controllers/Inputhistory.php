<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class Inputhistory extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		if(!$this->alus_auth->logged_in())
		{
			redirect('admin/Login','refresh');
		}
		$this->load->model('history_model');
	}
	public function index()
	{

		if($this->alus_auth->logged_in())
         {
         	$head['title'] = "History";

         	$data["kelas"] = $this->history_model->getAll();
		 	$this->load->view('template/temaalus/header',$head);
		 	$this->load->view('index',$data);
		 	$this->load->view('template/temaalus/footer');
		}else
		{
			redirect('admin/Login','refresh');
		}
	}
	
	public function murid($id)
	{
		    $head['title'] = "History";

         	$data["murid"] = $this->history_model->getAllmurid($id);
		 	$this->load->view('template/temaalus/header',$head);
		 	$this->load->view('murid',$data);
		 	$this->load->view('template/temaalus/footer');
	}

	function history()
	{
		
		$username = $this->uri->segment(3);
		$head['title'] = "History $username";

		$data['history'] = $this->history_model->gethistory($username);
		$this->load->view('template/temaalus/header',$head);
		$this->load->view('history',$data);
		$this->load->view('template/temaalus/footer');
	}
}
/* End of file  Home.php */
/* Location: ./application/controllers/ Home.php */