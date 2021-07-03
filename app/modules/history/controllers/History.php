<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class History extends CI_Controller 
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
			$username = $this->session->userdata('username');
			$head['title'] = "History $username";
	
			$data['history'] = $this->history_model->gethistory($username);
			$this->load->view('template/temaalus/header',$head);
			$this->load->view('history',$data);
			$this->load->view('template/temaalus/footer');
		}else
		{
			redirect('admin/Login','refresh');
		}
	}
}
/* End of file  Home.php */
/* Location: ./application/controllers/ Home.php */