<?php
class C_kategori extends CI_Controller{
    public function sayur(){
        $data['sayur'] = $this->M_kategori->data_sayur()->result();

        $this->load->view('templates/header');
        $this->load->view('sayur',$data);
        $this->load->view('templates/footer');
    }

    public function buah(){
        $data['buah'] = $this->M_kategori->data_buah()->result();

        $this->load->view('templates/header');
        $this->load->view('buah',$data);
        $this->load->view('templates/footer');
    }

    public function daging(){
        $data['daging'] = $this->M_kategori->data_daging()->result();

        $this->load->view('templates/header');
        $this->load->view('daging',$data);
        $this->load->view('templates/footer');
    }
}
?>