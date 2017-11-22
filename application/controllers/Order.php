<?php
class Order extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('DBModel');
        $this->DBModel->setTable('dc_info');
    }
    function index(){
        $dc_id=$_GET["dc_id"];
        $data['res'] = $this->DBModel->db
            ->query("SELECT `name` FROM  `dc_info` WHERE `dc_id` = ".$dc_id)
            ->result_array();
        var_dump( $data['res']);
        $this->load->view('order',$data);
    }
}


