<?php
class C_auth extends CI_Controller{
    public function login(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header');
            $this->load->view('form_login');
            $this->load->view('templates/footer');
        }else{
            $auth = $this->M_auth->cek_login();

            if($auth == FALSE){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"><center><h4>Anda Belum Login!</h4></center></div>');

              redirect('C_auth/login');
            }else{
                $this->session->set_userdata('username',$auth->username);
                $this->session->set_userdata('role_id',$auth->role_id);

                switch($auth->role_id){
                    case 1 : redirect('admin/C_dashadmin');
                    break;
                    case 2 : redirect('welcome');
                    break;

                    default:break;
                }
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('C_auth/login');
    }
}
?>