<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_therapist extends CI_Controller {


	public function index()
	{
	    $city_id = $this->input->get('city');
	    $state_id = $this->input->get('state');
	    $fb_id = $this->input->get('fb_id');
	    
	    $this->session->set_userdata(['fb_id'=>$fb_id]);
        $data['state'] = $state_id;
	    $data['city_id'] = $city_id;
	    $data['obj_city_list'] = $this->get_city_list($data['state']);
	    $data['obj_state'] = $this->get_state();
	    $data['obj_therapist'] = $this->m_search_therapist->get_therapist($state_id,$city_id);
	    $data['customer_data'] = $this->m_therapist->get_customer_data($fb_id);
		$this->load->view('v_search_therapist',$data); 
        
	}
	
	public function get_state()
	{
	    $obj = $this->db->get('user_state');
	    if($obj)
	    {
	        return $obj->result();
	    }
	}
	
	public function get_city()
	{
	    $state_id = $this->input->post('state');
	    $this->db->where('state_id',$state_id);
	    $obj = $this->db->get('user_city');
	    if($obj)
	    {
	        $output = [];
	        foreach($obj->result() as $row)
	        {
	            $output[$row->city_title.' ('.$this->m_search_therapist->get_total_therapist_per_city($row->city_id).') '] = $row->city_id;
	        }
	        echo json_encode($output);
	    }
	}
	
	public function get_city_list($state_id)
	{
	    if($state_id)
	    {
	        $this->db->where('state_id',$state_id);
	        $obj = $this->db->get('user_city');
    	    if($obj)
    	    {
    	        return $obj->result();
    	    }
	    }
	    
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */