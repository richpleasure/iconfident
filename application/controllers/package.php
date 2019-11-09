<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Package extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_package');
    }

    public function index() {
        $this->load->view('v_package');
    }
    
    public function details()
    {
        $this->load->view('v_package_details');
    }

}
