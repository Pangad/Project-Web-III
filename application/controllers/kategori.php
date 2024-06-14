<?php

class Kategori extends CI_Controller
{

    public function sepatu_pria()
    {
        $data['sepatu_pria'] = $this->model_kategori->data_sepatu_pria()->result();
        $this->load->view('home/header');
        $this->load->view('sepatu_pria', $data);
        $this->load->view('home/footer');
    }
    public function sepatu_wanita()
    {
        $data['sepatu_wanita'] = $this->model_kategori->data_sepatu_wanita()->result();
        $this->load->view('home/header');
        $this->load->view('sepatu_wanita', $data);
        $this->load->view('home/footer');
    }
    public function sepatu_anak_anak()
    {
        $data['sepatu_anak_anak'] = $this->model_kategori->data_sepatu_anak_anak()->result();
        $this->load->view('home/header');
        $this->load->view('sepatu_anak_anak', $data);
        $this->load->view('home/footer');
    }
}