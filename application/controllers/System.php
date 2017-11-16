<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/10/31
 * Time: 10:48
 */

class System extends CI_Controller
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
//        var_dump($res);
        $this->load->view('system',$data);
    }

}