<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

    function __construct()
	{
		parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        $this->load->model('M_login');
        
        

        $this->load->library('form_validation');
        
    }
    public function index()
    {
    	
        $this->load->view('Login');
    }

    public function check() {

        //set validation
		$this->form_validation->set_rules('nama_user', ' nama_user', 'required');
		$this->form_validation->set_rules('password', ' password', 'required');

		if ($this->form_validation->run() != FALSE) {
			if (!empty($_POST)) {
				$nama_user = $this->input->post('nama_user');
				$password = $this->input->post('password');

				$data = $this->M_login->get($nama_user);

				if (isset($data)) {
					if (password_verify($password, $data->password)) {
						if ($data->tipe == 'user' ) {
							$this->session->set_userdata('tipe', 'user');
							$this->session->set_userdata('nama_user', $data->nama_user);
							$this->session->set_userdata('id_user', ($data->id_user));
							redirect(base_url() . 'Kategori', 'refresh');
						}
						//end
						else {
							$this->session->set_flashdata('pesan', 'Akun anda belum aktif,  hubungi administrator');
							redirect(base_url() . 'login', 'refresh');
						}
					}else {
						$this->session->set_flashdata('pesan', 'Password Salah!');
						redirect(base_url() . 'login', 'refresh');
					}
				} else {
					$this->session->set_flashdata('pesan', 'Username Salah atau belum terdaftar!');
					redirect(base_url() . 'login', 'refresh');
				}
			}
		}else{
			$this->session->set_flashdata('warning', 'Username dan Password harus diisi..!');
			redirect(base_url() . 'login', 'refresh');
		} 

	}

}
