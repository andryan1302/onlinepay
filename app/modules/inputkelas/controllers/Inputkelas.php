<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Andryan@gmail.com
*/
class Inputkelas extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if(!$this->alus_auth->logged_in())
		{
			redirect('admin/Login','refresh');
		}
		$this->load->model('kelas_model');
	}

	public function index()
	{

		if($this->alus_auth->logged_in())
         {
         	$head['title'] = "Tambah Kelas";


         	$data["kelas"] = $this->kelas_model->getAllkelas();
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
		$head['title'] = "Tambah Kelas | Murid";

		$mg_id = $this->uri->segment(3);
		$data["murid"] = $this->kelas_model->getAllmurid();
		$data['anggotas'] = $this->kelas_model->getanggota($mg_id);
		$this->load->view('template/temaalus/header',$head);
		$this->load->view('murid',$data);
		$this->load->view('template/temaalus/footer');
	}

	public function deleteanggota($id)
	{	
		$this->kelas_model->deleteanggota($id);
		echo "Terhapus";
	}	

	public function add()
    {
    	$this->kelas_model->save();
        echo "Berhasil";
	}

	public function addmurid(){
		$this->kelas_model->savemurid();
		echo "Berhasil";
	}
	
	public function delete($id){
		$this->kelas_model->delete($id);
        echo "Terhapus";
	}

	public function update(){
		$this->kelas_model->update();
		echo "TerUpdate";
	}
}
/* End of file  Home.php */
/* Location: ./application/controllers/ Home.php */