<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/10/31
 * Time: 10:48
 */

class Person extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('DBModel');
        $table = array("account","orders","dc_info");
        $this->DBModel->setTable($table);
    }
    function index(){

        $data['res'] = $this->DBModel->db
            ->query("SELECT * FROM `account`, `orders`, `dc_info` WHERE `account`.`account_id` = `orders`.`account_id` AND `dc_info`.`dc_id` = `orders`.`dc_id` AND `account`.`account_id`=".$this->session->userdata["account_id"])
            ->result_array();
        //print_r($data);
        $this->load->view('person',$data);

    }


}