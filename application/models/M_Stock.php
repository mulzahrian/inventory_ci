<?php

class M_Stock extends CI_Model
{

    public function insertStock1($data, $table)
    {
        $this->db->insert($table, $data);
    }

    

    public function listStock($id_stok)
    {
        $this->db->select('f.*,l.id_produk,l.nama_produk');
        $this->db->from('tbl_stock f,tbl_produk l');
        $this->db->where('f.id_produk=l.id_produk');
        return $this->db->get()->result();
    }
    
}
