<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        setlocale(LC_ALL, 'id_ID');
        $this->load->model('M_Stock');
    }

    public function index()
    {

        $this->load->view('assets/_header');
        //$page_data['po_obat'] = $this->M_Pembelian_obat->getDataPO();
        $page_data['stock'] = $this->db->get('tbl_produk')->result_array();

        $page_data['page_content'] = 'page_content/Stock_v';
        // $page_data['obat'] = $this->M_Pembelian_obat->getNamaObat();
        
        $this->load->view('Main', $page_data);
        $this->load->view('assets/_footer');
    }

    public function insertStock(){
        if (!empty($_POST)){
            $this->form_validation->set_rules('id_produk','id_produk','required');
            $this->form_validation->set_rules('jumlah_barang','jumlah_barang','required');
            $this->form_validation->set_rules('tgl_update','tgl_update','required');
            

            if ($this->form_validation->run() != FALSE){

                $id_produk  =  $this->input->post('id_produk');
                $jumlah_barang  =  $this->input->post('jumlah_barang');
                $tgl_update  =  $this->input->post('tgl_update');
                

                $data = array(
                'id_produk' => $id_produk,
                'jumlah_barang' => $jumlah_barang,
                'tgl_update' => $tgl_update,
        );

                $this->M_Stock->insertStock1($data, 'tbl_stock');
                $this->session->set_flashdata('pesan', 'Data <strong>berhasil</strong> disimpan (<i>Data <strong>saved</strong> successfully</i>)');
            }
            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }else{

            $this->session->set_flashdata('warning', '<strong>Gagal .. !</strong> Data  gagal ditambahkan, semua fill harus diisi</strong>');
        }
       redirect(base_url() . 'Stock', 'refresh');
    }


   
   //tes

    public function tampil_stock()
    {
        $id_stok = $this->input->post('id_stok');
        $page_data = $this->M_Stock->listStock($id_stok);
        $out = null;
        for ($i = 0; $i < count($page_data); $i++) {
             

            $no = $i + 1;
            $nama_produk = $page_data[$i]->nama_produk;
            $jumlah_barang = $page_data[$i]->jumlah_barang;
            $tgl_update = $page_data[$i]->tgl_update;


            
            


            $out[$i] = array($no, $nama_produk,$jumlah_barang,$tgl_update);
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



    //end
    
    
}
