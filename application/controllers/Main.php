<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends CI_Controller{

    function __construct()
	{
		parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_Polionline');
    }

    public function index()
    {
        $this->load->view('assets/_header');
        $page_data['page_content']='page_content/Main';
        
        // $page_data['polionline']= $this->M_Polionline->selectData();
		$this->load->view('Main',$page_data);
        $this->load->view('assets/_footer');
    
    }

    public function tampil_data(){
        $page_data = $this->M_Polionline->selectData();
        echo json_encode($page_data);
    }
}
