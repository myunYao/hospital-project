<?php
class Subscribe extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DBModel');
        $this->DBModel->setTable('dc_info');
    }
    function index(){
        $data['res'] = $this->DBModel->get();
        $this->load->view('subscribe',$data);

    }

}


