<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_search_therapist extends CI_Model {
    
    public function get_therapist($state_id,$city_id)
    {
        $this->db->where('t.therapist_state',$state_id);
        $this->db->where('t.therapist_city',$city_id);
        $this->db->join('user_city as uc', 'uc.city_id = t.therapist_city', 'left');
        $this->db->join('user_state as us', 'us.state_id = t.therapist_state', 'left');
        $this->db->order_by('rand()');
        
        $query = $this->db->get("therapist as t");
        if($query->num_rows() > 0)
        {
            $obj = $query->result();
            return $obj;
        }else
        {
            return false;
        }
    }
    
    public function get_total_therapist_per_city($city=0)
    {
        $this->db->where('therapist_city',$city);
        $query = $this->db->get('therapist');
        return $query->num_rows();
    }
    
    public function get_total_therapist_per_state($state)
    {
        $this->db->where('therapist_state',$state);
        $query = $this->db->get('therapist');
        return $query->num_rows();
    }
    
}