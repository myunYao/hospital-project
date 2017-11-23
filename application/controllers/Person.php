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
        $data['res1']=$this->DBModel->db
            ->query("SELECT fastorders.subject,fastorders.fastorder_id,account.account,dc_info.name,fastorders.orderdate,fastorders.ordertime FROM `account`, `fastorders`, `dc_info` WHERE `account`.`account_id` = `fastorders`.`account_id` AND  `account`.`account_id`=".$this->session->userdata["account_id"]." GROUP BY `name`")
            ->result_array();
        $data['user'] = $this->DBModel->db
            ->query("SELECT * FROM `account` WHERE `account`.`account_id`=".$this->session->userdata['account_id'])
            ->result_array();
        $this->load->view('person',$data);

    }


}