<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class Inputgrup extends CI_Controller 
{

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

         	$data["grup"] = $this->grup_model->getAll();
         	$data["kelas"] = $this->grup_model->getAllkelas();
		 	$this->load->view('template/temaalus/header',$head);
		 	$this->load->view('index',$data);
		 	$this->load->view('template/temaalus/footer');
		}else
		{
			redirect('admin/Login','refresh');
		}
	}
	function lihatmurid()
	{
		$head['title'] = "Operator";

		$mg_id = $this->uri->segment(3);
		$data['anggotas'] = $this->grup_model->getanggota($mg_id);
		$this->load->view('template/temaalus/header',$head);
		$this->load->view('anggota',$data);
		$this->load->view('template/temaalus/footer');
	}
	function tambahkelas()
	{
		$head['title'] = "Operator";

		$data['kelas'] = $this->grup_model->getAllkelas();
		$this->load->view('template/temaalus/header',$head);
		$this->load->view('add_kelas',$data);
		$this->load->view('template/temaalus/footer');
	}
	public function check_grup()
	{
		$this->grup_model->insert_grup();
		echo "Berhasil";
	}
    public function add()
    {
    	$this->grup_model->save();
        echo "Berhasil";
    }
    public function delete($id)
    {
    	$this->grup_model->delete($id);
    	echo "Terhapus";
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
}
/* End of file  Home.php */
/* Location: ./application/controllers/ Home.php */