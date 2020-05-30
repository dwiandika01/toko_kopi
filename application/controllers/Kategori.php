<?php

class Kategori extends CI_Controller{
    public function biji()
    {
        $data['biji'] = $this->model_kategori->data_biji()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('biji', $data);
        $this->load->view('templates/footer');

    }

    public function bubuk()
    {
        $data['bubuk'] = $this->model_kategori->data_bubuk()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bubuk', $data);
        $this->load->view('templates/footer');
    }
}