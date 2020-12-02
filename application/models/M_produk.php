<?php

class M_produk extends CI_Model
{

    public function insertProduk($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getProduk()
    {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        return $this->db->get()->result();
    }

    public function get_kode($kode_produk)
    {
        $this->db->where('kode_produk', $kode_produk);
        $query = $this->db->get('tbl_produk');
        return $query->result();
    }

    public function Detail_Product($id_produk = NULL){
    $query = $this->db->get_where('tbl_produk', array('id_produk' => $id_produk))->row();
    return $query;
    }

    public function tampil_pro()
    {
    return $this->db->get('tbl_produk');
    }

    

    public function listProduk($id_produk)
    {
        $this->db->select('f.*,l.id_kategori,l.nama_kategori');
        $this->db->from('tbl_produk f,tbl_kategori l');
        $this->db->where('f.id_kategori=l.id_kategori');
        return $this->db->get()->result();
    }

//     SELECT pelanggan.id_pelanggan, pelanggan.nm_pelanggan, pesan.id_pesan, pesan.tgl_pesan
// FROM pelanggan, pesan
// WHERE pelanggan.id_pelanggan=pesan.id_pelanggan;

    
    
}
