<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_profile extends CI_Model {

	public function get_therapist_data($username)
	{
	    if($username)
	    {
	        $this->db->where('therapist_username',$username);
	        $query = $this->db->get("therapist");
    	    if($query->num_rows() == 1)
    	    {
    	        return $query->row();
    	    }
	    }
	}
	
	public function store_data($input_data)
	{
	    if($input_data){
	        $data['package_id'] = $input_data['_postnatal_package'];
	        $data['package_title'] = $input_data['_postnatal_package_text'];
	        $data['customer_fullname'] = $input_data['_customer_name'];
	        $data['customer_phone_no'] = $input_data['_phoneno'];
	        $data['therapist_refer'] = $input_data['_refer'];
	        $data['dt_added'] = date("Y-m-d H:i:s");
	        
	        $this->db->insert("postnatal_massage_customer",$data);
	        
	        $insert_id = $this->db->insert_id();

            return  $insert_id;
	    }
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */