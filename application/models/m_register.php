<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_register extends CI_Model {

    public function store_data($input_data) {
        
        $ic_number = $input_data['ic_number'];
        $phone_no = $input_data['phone_no'];
        $check_data = $this->check_is_exist($ic_number, $phone_no);
        if($check_data['status'] == true)
        {
            return $check_data['affiliate_id'];
        }else 
        {
            if ($input_data) {
                $data['full_name'] = ucwords($input_data['full_name']);
                $data['ic_number'] = $input_data['ic_number'];
                $data['date_of_birth'] = $input_data['dob'];
                $data['course_id'] = $input_data['course_id'];
                $data['user_email'] = $input_data['user_email'];
                $data['phone_no'] = $input_data['phone_no'];
                $data['phone_no_alt'] = $input_data['phone_no_alt'];
                $data['current_career'] = $input_data['current_career'];
                $data['why_interested'] = $input_data['why_interested'];
                $data['location_lived'] = $input_data['location_lived'];
//                $data['dt_added'] = date("Y-m-d H:i:s");

                $course_title = $this->get_course_title_by_course_id($data['course_id']);

                $this->db->insert("new_registration", $data);
                $reg_id = $this->db->insert_id();

                $this->__generate_matrix_id($data['course_id'], $reg_id);
                $insert_notification['notification_title'] = "New registration from <b>" . $data['full_name'] . "</b> at " . $course_title . '! Please review.';
                $notify_id = $this->__store_notification($insert_notification);

                $insert_notification_1['refer_url'] = '/customer/details/?reg_id=' . $reg_id . '&notify_id=' . $notify_id;
                $this->db->where('notification_id', $notify_id);
                $this->db->update('notifications', $insert_notification_1);

                // Start register as affiliate
                $data_affiliate['full_name'] = $data['full_name'];
                $data_affiliate['member_id'] = $reg_id;
                $data_affiliate['phone_number'] = $data['phone_no'];
//                $data_affiliate['dt_register'] = date("Y-m-d H:i:s");
                $affiliate_id = $this->__register_affiliate($data_affiliate);
                // End register as affiliate


                return $affiliate_id;
            }
        }
        
    }
    
    public function check_is_affiliate_exist($ref_id)
    {
        if($ref_id)
        {
            $this->db->where('refer_id',$ref_id);
            $q = $this->db->get('referral');
            if($q)
            {
                return $q->num_rows();
            }
        }
    }
    public function get_affiliate_data_by_reg_id($reg_id)
    {
        $this->db->where('member_id',$reg_id);
        $q = $this->db->get('referral');
        if($q)
        {
            return $q->row();
        }
    }

    public function check_is_exist($ic_number, $phone_number) {
        if ($ic_number && $phone_number) {
            $this->db->where('ic_number', $ic_number);
            $this->db->or_where('phone_no', $phone_number);
            $q = $this->db->get('new_registration');
            if($q && $q->num_rows() > 0)
            {
                $data['status'] = true;
                $obj_affiliate = $this->get_affiliate_data_by_reg_id($q->row()->reg_id);
                if($obj_affiliate)
                {
                    $data['affiliate_id'] = $obj_affiliate->refer_id;
                }
                return $data;
            }else 
            {
                $data['status'] = false;
                return $data;
            }
        }
    }

    public function __register_affiliate($data_affiliate) {
        if ($data_affiliate) {
            $this->db->insert('referral', $data_affiliate);
            $affiliate_id = $this->db->insert_id();
            return $affiliate_id;
        }
    }

    public function get_course_list() {
        $this->db->where('course_status', 1); // Only Active Course will be shown
        $this->db->order_by('course_start_date', 'asc');
        $this->db->limit(11);
        $q = $this->db->get('course_details');
        if ($q)
            return $q->result();
    }

    function get_course_title_by_course_id($course_id) {
        $this->db->where('course_id', $course_id);
        $q = $this->db->get('course_details');
        if ($q) {
            return $q->row()->course_title;
        }
    }

    function __store_notification($insert_data) {
        $this->db->insert('notifications', $insert_data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    //IC201908-6-00001
    function __generate_matrix_id($course_id, $reg_id) {
        if ($course_id && $reg_id) {
            $matrix_id = 'IC' . date('Ym') . '-' . sprintf('%02d', $course_id) . '-' . sprintf('%05d', $reg_id);
            //IC : I-Confident
            $this->db->where('reg_id', $reg_id);
            $this->db->update('new_registration', [
                'matrix_id' => $matrix_id
            ]);
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */