<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_register');
        $this->load->helper('url');
    }
    
    public function index()
    {
        $data_register['obj_course_list'] = $this->m_register->get_course_list();
        $this->load->view('v_register',$data_register);
    }

    public function submit() {
        $input_data = $this->input->post();
        $affiliate_id = $this->m_register->store_data($input_data);
        if ($affiliate_id) {
            redirect('/register/success/?ref=' . $affiliate_id);
        }
    }
    
    
    public function success() {
        $ref = $this->input->get('ref');
        $is_existed = $this->m_register->check_is_affiliate_exist($ref);
        if($is_existed > 0)
        {
            $this->load->view('v_success');
        }else 
        {
            redirect('/register');
        }
    }

}
