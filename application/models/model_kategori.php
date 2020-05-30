<?php

class Model_kategori extends CI_Model{
    public function data_biji()
    {
       return $this->db->get_where('tb_barang', array('kategori' => 'Biji '));
    }

    public function data_bubuk()
    {
       return $this->db->get_where('tb_barang', array('kategori' => 'Bubuk '));
    }

}