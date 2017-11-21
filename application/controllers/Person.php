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
        $this->load->model('DBModel');
        $table = array("account","orders","dc_info");
        $this->DBModel->setTable($table);
    }
    function index(){

        $where = array(
            "account.account_id" =>"orders.account_id",
            "dc_info.dc_id" => "orders.dc_id",
        );

        $data['res'] = $this->DBModel->db
            ->query("SELECT * FROM `account`, `orders`, `dc_info` WHERE `account`.`account_id` = `orders`.`account_id` AND `dc_info`.`dc_id` = `orders`.`dc_id`")
            ->result_array();
       // print_r($data);
        $this->load->view('person',$data);

    }


}