<?php

class Register extends CI_Controller{

    public function reg(){
       $this->form_validation->set_rules('company_name','Company Name','required');
       $this->form_validation->set_rules('company_email','Company E-Mail','required|valid_email|is_unique[users.company_email]');
       $this->form_validation->set_rules('contact_no','Contact No','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('user_name','Username','required');
        $this->form_validation->set_rules('user_password','Password','required');
        $this->form_validation->set_rules('confirm_password','Comfirm Password','required|matches[user_password]');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('register');
        }
        else
        {
            $this->load->model('Model_users');
           $responce = $this->Model_users->Insert_Data();
           if($responce){
               $this->session->set_flashdata('msg','Registered Sucsessfully Please Loging');
               redirect('Home/index');
           }
        }
    }

}
