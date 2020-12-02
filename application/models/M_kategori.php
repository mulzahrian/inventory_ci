<?php

class M_kategori extends CI_Model
{

    public function insertKategori($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getKategori()
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        return $this->db->get()->result();
    }

    public function listkategori($id_kategori)
    {
        $this->db->select('*');
        $this->db->from('tbl_kategori');
        $this->db->where('id_kategori=id_kategori');
        return $this->db->get()->result();
    }

    
    
}
