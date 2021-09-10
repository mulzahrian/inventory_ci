<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        setlocale(LC_ALL, 'id_ID');
        $this->load->model('M_kategori');
    }

    public function index()
    {

        $this->load->view('assets/_header');
        $page_data['kat'] = $this->M_kategori->getKategori();
        

        $page_data['page_content'] = 'page_content/Kategori_v';
        
        $this->load->view('Main', $page_data);
        $this->load->view('assets/_footer');
    }

    public function insertKategori(){
        if (!empty($_POST)){
            $this->form_validation->set_rules('nama_kategori','nama_kategori','required');
            

            if ($this->form_validation->run() != FALSE){

                $nama_kategori  =  $this->input->post('nama_kategori');
                

                $data = array(
                'nama_kategori' => $nama_kategori,
        );

                $this->M_kategori->insertKategori($data, 'tbl_kategori');
                $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> disimpan (<i>Data <strong>saved</strong> successfully</i>)');
            }
            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }else{

            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }
       redirect(base_url() . 'Kategori', 'refresh');
    }

    public function tampil_list_kategori()
    {
        $id_kategori = $this->input->post('id_kategori');
        $page_data = $this->M_kategori->listkategori($id_kategori);
        $out = null;
        for ($i = 0; $i < count($page_data); $i++) {

            $edit =  "<a class='btn btn-success btn-icon-anim btn-circle' data-toggle='modal' onclick='edit_kategori(\"" . $page_data[$i]->id_kategori .  "\")'><i class='icon-note'></i></a>";
             

            $no = $i + 1;
            $nama_kategori = $page_data[$i]->nama_kategori;
            
            


            $out[$i] = array($no, $edit, $nama_kategori);
        }
        if($out == null){
            echo '{"data":""}';
            exit;
        }else{
            $data['data'] = $out;
            echo json_encode($data);
            exit;
        }
    }    
}
