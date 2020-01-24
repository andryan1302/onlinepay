<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author 		Maulana Rahman <maulana.code@gmail.com>
*/
class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('captcha');
	}
		

	public function index()
	{
	
		if($this->alus_auth->logged_in())
         {
		 redirect('dashboard/','refresh');
		}else
		{	
			$this->load->view('index_login');
		}
	}

	public function login()
	{
		$this->data['title'] = "Login";
		//login attemp . jika sudah melampaui kesempatan ( jumlah kesempatan ada di config ) maka dilempar kembali ke halaman login . 
		if ($this->alus_auth->is_max_login_attempts_exceeded($this->input->post('identity')))
		{
				if($this->alus_auth->is_time_locked_out($this->input->post('identity')))
				{
					$this->session->set_flashdata('message', 'You have too many login attempts. please wait 5 minutes and try again');
          			echo json_encode(array("status" => FALSE,"msg" => "You have too many login attempts. please wait 5 minutes and try again" ));
				}
		}

		

		//validate form input
		$this->form_validation->set_rules('identity', 'Identity', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{
			/*if($captchas = $this->input->post('g-recaptcha-response') != "")
			{*/
				$captchas = $this->input->post('g-recaptcha-response');

				$response['success'] = true;
				//$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret='6LdVbg8UAAAAAO6FbHugzXPaAPElXyBGJVhw728O'&response=".$captchas."&remoteip=".$_SERVER['REMOTE_ADDR']), true);	
			/*}else{
				$response['success'] = true;
			}	*/
				
			if($response['success'] == false)
			{
				//$this->session->set_flashdata('message',"ERROR . Anda Manusia ? ");
				echo json_encode(array("status" => FALSE,"msg" => "ERROR . Anda Manusia ?" ));
			}
			else
			{
				//if the login is successful
				//redirect them back to the home page
				// mereset kesemepatan login
				if ($this->alus_auth->login($this->input->post('identity'), $this->input->post('password')))
				{
					$this->alus_auth->clear_login_attempts($this->input->post('identity'));
					setcookie('id_login', $this->session->userdata('user_id'),0,'/');

        			echo json_encode(array("status" => TRUE,"redirect" => base_url('dashboard'), "msg" => "Selamat Datang"));
				}else
				{
					// if the login was un-successful
					// redirect them back to the login page
					// saat gagal login, mengurangi sisa kesempatan .
        			$this->session->set_flashdata('message', $this->alus_auth->errors());
        			echo json_encode(array("status" => FALSE,"msg" => $this->alus_auth->errors()));
				}		
			}
		}
		else
		{
			// the user is not logging in so display the login page
			// set the flash data error message if there is one
      		$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
      		$this->session->set_flashdata('message', $this->data['message']);
      		echo json_encode(array("status" => FALSE,"msg" => $this->data['message']));
			
		}
	}

	public function logout()
	{
		// log the user out
		setcookie('id_login', '0',0,'/');
		
		$logout = $this->alus_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->alus_auth->messages());
		redirect('admin/Login','refresh');
	}

	public function save_data_endpoint()
    {
        $ip = $this->input->post('ip');
        $endpoint = $this->input->post('enpoint');
        $id_login = $this->input->post('id_login');

        if($id_login != 0 || $id_login != '0')
        {
            /*berarti dia login*/
            $this->db->where('tue_id_login', $id_login);
            $dt = $this->db->get('t_user_endpoint');
            if($dt->num_rows() > 0 )
            {
                /*update*/
                $data_up = array(
                    'tue_endpoint' => $endpoint,
                    'tue_ip' => $ip,
                );

                $this->db->where('tue_id', $dt->row()->tue_id);
                $this->db->update('t_user_endpoint', $data_up);
                echo json_encode('ok update');
            }else{
                /*cek ip*/
                $this->db->where('tue_ip', $ip);
                $dt_ip = $this->db->get('t_user_endpoint');
                if($dt_ip->num_rows() > 0 )
                {
                    /*update*/
                    $data_up = array(
                        'tue_endpoint' => $endpoint,
                        'tue_id_login' => $id_login,
                    );

                    $this->db->where('tue_id', $dt_ip->row()->tue_id);
                    $this->db->update('t_user_endpoint', $data_up);
                    echo json_encode('ok update');
                }else{
                    /*tambah baru*/
                    $data_baru = array(
                        'tue_ip' => $ip,
                        'tue_endpoint' => $endpoint,
                        'tue_id_login' => $id_login,
                    );

                    $this->db->insert('t_user_endpoint', $data_baru);
                    echo json_encode('ok');
                }
            }
        }else{
            $this->db->where('tue_ip', $ip);
            $dt = $this->db->get('t_user_endpoint');
            if($dt->num_rows() > 0 )
            {
                /*update*/
                $data_up = array(
                    'tue_endpoint' => $endpoint,
                    'tue_id_login' => 0,
                );

                $this->db->where('tue_id', $dt->row()->tue_id);
                $this->db->update('t_user_endpoint', $data_up);
                echo json_encode('ok update');
            }else{
                /*tambah baru*/
                $data_baru = array(
                    'tue_ip' => $ip,
                    'tue_endpoint' => $endpoint,
                    'tue_id_login' => 0,
                );

                $this->db->insert('t_user_endpoint', $data_baru);
                echo json_encode('ok');
            }
            
        }
    }
}

/* End of file  Home.php */
/* Location: ./application/controllers/ Home.php */