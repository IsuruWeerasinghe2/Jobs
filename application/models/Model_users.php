<?php


class Model_users extends CI_Model{
    public function Insert_Data(){
        $data=array(

            /* Key(this is data base table atributes) = Value(this is form name)*/
            'company_name'=>$this->input->post('company_name',TRUE),
             'company_email'=>$this->input->post('company_email',TRUE),
            'contact_no'=>$this->input->post('contact_no',TRUE),
            'address'=>$this->input->post('address',TRUE),
            'username'=>$this->input->post('user_name',TRUE),
            'password'=>sha1($this->input->post('user_password',TRUE))

        );
        return $this->db->insert('users',$data);
    }
}