<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function __construct() {
            parent::__construct(); 
            $this->load->model('m_profile');
            $this->load->model('m_main');
    }

    public function index()
    {
        $username = $this->uri->segment(1);
        $therapist_data = $this->m_profile->get_therapist_data($username);
        $data['obj_package'] = $this->m_main->get_package_data();
        if (!$therapist_data) {
            redirect('/');
        }
        else 
        {
            $data['username'] = $username;
            $data['therapist_data'] = $therapist_data;
            $this->load->view('v_profile',$data);
        }
    }
    
    public function store_data()
	{
	    $input_data = $this->input->post();
        $store_result = $this->m_profile->store_data($input_data);
        if($store_result)
        {
            $output['result']='saved';
            $output['url_whatsapp']='[Nama: '.$input_data['_customer_name'].'],  [Package: '.$input_data['_postnatal_package_text'].']';
            echo json_encode($output);
        }
	}
	
}