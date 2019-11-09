<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class super_premium extends CI_Controller {
            
                public function __construct() {
                    parent::__construct();
                }
		
		public function index()
		{
			$this->load->model('m_main');
			$this->m_main->__update_course_status();
			$data['obj_course_venue'] = $this->m_main->get_course_list();
			$this->load->view('super_premium',$data);
		}
		
		public function t()
		{
                    echo $_SERVER['QUERY_STRING'];
		}
		
		public function s_phone()
		{
			$this->load->model('m_super_premium');
			$this->load->model('m_register');
			
			$name = $this->input->post('name');
			$phone_number = $this->input->post('phone_no');
			$ref_id = $this->input->post('ref_id') ? $this->input->post('ref_id') : 0;
			$course_id = $this->input->post('course_id');
			$product = 'kursus';
			$venue = $this->input->post('venue'); 
			
			$data['prospect_name'] = $name;
			$data['prospect_phoneno'] = $phone_number;
			$data['product_service'] = $product;
			$data['prospect_interested_venue'] = $venue;
			$data['refer_id'] = $ref_id;
			$data['course_id'] = $course_id;
			
			
			
			
			$prospect_id = $this->m_super_premium->store_prospect_data($data);
			if($prospect_id)
			{
				$insert_notification['notification_title'] = $name." intereseted event at ".$this->m_register->get_course_title_by_course_id($course_id).'!';
				$insert_notification['refer_url'] = '/prospect/details/?prospect_id='.$prospect_id;
				$this->m_register->__store_notification($insert_notification);
				
				$data_saved['status_saved'] = 'saved';
				$data_saved['prospect_interested_venue'] = $venue;
				
				$msg = $venue;
				$url_wsp = "https://api.whatsapp.com/send?phone=".ADMIN_PHONE_NO.'&text='.urlencode($msg);
				echo $url_wsp;
				// redirect($url_wsp,'refresh');
				
			}
		}
	} 
	
	/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */