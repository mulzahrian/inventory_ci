<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        setlocale(LC_ALL, 'id_ID');
        $this->load->model('M_produk');
        $this->load->library('form_validation');
        $this->load->library('dompdf_gen');
    }

    public function index()
    {

        $this->load->view('assets/_header');
        $page_data['produk'] = $this->M_produk->getProduk();
        

        $page_data['page_content'] = 'page_content/Laporan_v';
        
        $this->load->view('Main', $page_data);
        $this->load->view('assets/_footer');
    }

    public function pdf($id_produk)
    {
        $this->load->library('dompdf_gen');

        //$data['title'] = 'Detail Data Rekam Medis';

        $this->load->model('M_produk');
        $detail = $this->M_produk->Detail_Product($id_produk);
        $data['detail'] = $detail;
        $where = array('id_produk' => $id_produk);
        
        
        

         //$data = array(
        //'record'  => $this->db->query("SELECT * FROM db_rekam_medis where id ='$id'"),
        //);


        //$data['db_rekam_medis'] = $this->Laporan_model->getLaporanById($id);
        //$data['id_hewan_ternak'] = $this->db->get('db_rekam_medis')->result_array();
        //$this->load->view('laporan/pdf',$data);
        $this->load->view('page_content/Pdf_v', $data);

        $paper_size = 'A5';
    $orientation = 'portrait';
    $html = $this->output->get_output();

    $this->dompdf->set_paper($paper_size, $orientation);
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan.pdf", array('attachment' =>0));



    
}

public function excel()
    {
        //$data['medis'] = $this->Laporan_model->getAllLaporan();

        $data['pro'] = $this->M_produk->tampil_pro('tbl_produk')->result();

        //$data['medis'] = $this->db->get('db_rekam_medis')->result_array();
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');


        $object = new PHPExcel();

        $object->getProperties()->setCreator("Mulzahrian");
        $object->getProperties()->setLastModifiedBy("Mulzahrian");
        $object->getProperties()->setTitle("Daftar Inventory");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1','NO');
        $object->getActiveSheet()->setCellValue('B1','Nama Produk');
        $object->getActiveSheet()->setCellValue('C1','Kode Produk');
        $object->getActiveSheet()->setCellValue('D1','Tanggal Register');

        $baris = 2;
        $no = 1;

        foreach ($data['pro'] as $mds) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $mds->nama_produk);
            $object->getActiveSheet()->setCellValue('C'.$baris, $mds->kode_produk);
            $object->getActiveSheet()->setCellValue('D'.$baris, $mds->tgl_register);

            $baris++;
        }

    $filename="Inventory".'.xlsx';
    $object->getActiveSheet()->setTitle("Inventory");
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');

    $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
    $writer->save('php://output');
    exit;

}

    

    
    
}
