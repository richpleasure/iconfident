<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_super_premium extends CI_Model {


	public function store_prospect_data($data)
	{
	    if($data)
	    {
	        $prospect_phoneno = $data['prospect_phoneno'];
	        $product_service = $data['product_service'];
	        $prospect_interested_venue = $data['prospect_interested_venue'];
	        
	        $this->db->where('prospect_interested_venue',$prospect_interested_venue);
	        $this->db->where('product_service',$product_service);
	        $this->db->where('prospect_phoneno',$prospect_phoneno);
	        $obj_test = $this->db->get('prospects');
	        if($obj_test->num_rows < 1)
	        {
	            $data['prospect_date_added'] = date('Y-m-d H:i:s');
    	        $this->db->insert("prospects",$data);
				
				$prospect_id = $this->db->insert_id();
				return $prospect_id;
				
	        }else
	        {
	            return true;
	        }
	    }
	}
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */