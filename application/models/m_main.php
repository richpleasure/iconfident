<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_main extends CI_Model {
    
        public function get_total_people_interested($course_id)
        {
            if($course_id)
            {
                $this->db->where('course_id',$course_id);
                $q = $this->db->get('prospects');
                if($q)
                {
                    return $q->num_rows();
                }
            }
        }
        
        public function get_total_people_going($course_id)
        {
            if($course_id)
            {
                $this->db->where('course_id',$course_id);
                $q = $this->db->get('new_registration');
                if($q)
                {
                    return $q->num_rows();
                }
            }
        }
	
	public function __update_course_status()
	{
		$this->db->query("UPDATE course_details SET course_status = 0 WHERE DATEDIFF(course_start_date,now()) <= -1");
		$r = $this->db->affected_rows();
		return $r;
	}
	
	public function get_course_list()
	{
                $this->db->select('COUNT(n.course_id) as total_registered, (c.course_total_students_limit-COUNT(n.course_id)) as total_left,n.*, c.*');
                $this->db->join('new_registration as n','n.course_id=c.course_id','left');
		$this->db->where('c.course_status',1); //Active record only
		$this->db->order_by('c.course_start_date','asc');
                $this->db->group_by('c.course_id');
                $this->db->limit(12);
		$q = $this->db->get('course_details as c');
		if($q){
			return $q->result();
		}
	}

	public function get_package_data()
	{
	    $query = $this->db->get("postnatal_package");
	    if($query->num_rows() > 0)
	    {
	        return $query->result();
	    }
	}
	
	public function store_data($input_data)
	{
	    
	     /*
	    _postnatal_package: _postnatal_package,
        _customer_name:_customer_name,
        _phoneno: _phoneno,
        _location_service: _location_service,
        state:state,
        city: city
        */
        
	    if($input_data){
	        $data['package_id'] = $input_data['_postnatal_package'];
	        $data['package_title'] = $input_data['_postnatal_package_text'];
	        $data['customer_fullname'] = $input_data['_customer_name'];
	        $data['customer_phone_no'] = $input_data['_phoneno'];
	        $data['customer_service_address'] = $input_data['_location_service'];
	        $data['customer_state'] = $input_data['state'];
	        $data['customer_city'] = $input_data['city'];
	        $data['dt_added'] = date("Y-m-d H:i:s");

	        
	        $this->db->insert("postnatal_massage_customer",$data);
	        
	        $insert_id = $this->db->insert_id();

            return  $insert_id;
	    }
	}
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */