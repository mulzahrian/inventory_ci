<?php

    class M_login extends CI_Model{

       var $table = 'pengguna';

    function get($nama_user) {
        return $this->db->get_where($this->table, array('nama_user' => $nama_user, 'status' => 1))->row();
    }
    }

?>
