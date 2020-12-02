<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        setlocale(LC_ALL, 'id_ID');
        $this->load->model('M_produk');
    }

    public function index()
    {

        $this->load->view('assets/_header');
        $page_data['Kategori'] = $this->db->get('tbl_kategori')->result_array();

        $page_data['page_content'] = 'page_content/produk_v';
        
        $this->load->view('Main', $page_data);
        $this->load->view('assets/_footer');
    }

    private function _uploadImage()
{
    $config['upload_path']          = './assets/images/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->input->post('id_produk');
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto_produk')) {
        return $this->upload->data("file_name");
    }
    
    return "avatar.jpg";
}


    public function insertProduk(){
        if (!empty($_POST)){
            $this->form_validation->set_rules('id_kategori','id_kategori','required');
            $this->form_validation->set_rules('nama_produk','nama_produk','required');
            $this->form_validation->set_rules('kode_produk','kode_produk','required');
            $this->form_validation->set_rules('foto_produk','foto_produk');
            

            if ($this->form_validation->run() != FALSE){

                $id_kategori  =  $this->input->post('id_kategori');
                $nama_produk  =  $this->input->post('nama_produk');
                $kode_produk  =  $this->input->post('kode_produk');
                $tgl_register = date("Y-m-d H:i:s");
                $foto_produk  =  $this->_uploadImage();
                

                $data = array(
                'id_kategori' => $id_kategori,
                'nama_produk' => $nama_produk,
                'kode_produk' => $kode_produk,
                'foto_produk' => $foto_produk,
                'tgl_register' => $tgl_register,
        );

                $this->M_produk->insertProduk($data, 'tbl_produk');
                $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> disimpan (<i>Data <strong>saved</strong> successfully</i>)');
            }
            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }else{

            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }
       redirect(base_url() . 'Produk', 'refresh');
    }



   
   //tes

    public function tampil_produk()
    {
        $id_produk = $this->input->post('id_produk');
        $page_data = $this->M_produk->listProduk($id_produk);
        $out = null;
        for ($i = 0; $i < count($page_data); $i++) {

            $edit =  "<a class='btn btn-success btn-icon-anim btn-circle' data-toggle='modal' onclick='edit_produk(\"" . $page_data[$i]->id_produk .  "\")'><i class='icon-note'></i></a>";
             

            $no = $i + 1;
            $nama_kategori = $page_data[$i]->nama_kategori;
            $nama_produk = $page_data[$i]->nama_produk;
            $kode_produk = $page_data[$i]->kode_produk;
            $foto_produk = " <img src='<?= base_url('assets/images/') " . $page_data[$i]->foto_produk;   " ?>'> 
            ";
            $tgl_register = $page_data[$i]->tgl_register;


            
            


            $out[$i] = array($no,$edit, $nama_kategori,$nama_produk,$kode_produk,$foto_produk,$tgl_register);
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

    public function check()
    {
        $kode_produk = $this->input->post("kode_produk");
        $tmp_data = $this->M_produk->get_kode($kode_produk);

        if (count($tmp_data) > 0) {
            echo '<label class="text-danger pt-10"><span><i class="fa fa-times" aria-hidden="true">
            </i> Kode Produk Telah Digunakan</span></label>';
        } else {
            echo '<label class="text-success pt-10"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i>Kode Produk Belum Digunakan</span></label>';
        }
    }



    //end
    
    
}
