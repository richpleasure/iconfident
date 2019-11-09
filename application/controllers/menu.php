<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('m_login');
    }

    public function index() {
        $this->load->view('v_menu');
    }

}
