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
        /*$this->db->select('*');
        $this->db->from('blogs');
        $this->db->join('comments', 'comments.id = blogs.id');
        $query = $this->db->get();
        SELECT * FROM blogs JOIN comments ON comments.id = blogs.id*/
        $where = array(
            "account.account_id" =>"orders.account_id",
            "dc_info.dc_id" => "orders.dc_id",
        );
        $data['res'] = $this->DBModel->get($where);
        print_r($data);
        $this->load->view('person',$data);

    }
   /* function getdata($table,$where){
         $table= array("account","orders","dc_info");
         $where = array(
             "account.account_id" =>"orders.account_id",
             "dc_info.dc_id" => "orders.dc_id",
         );
         $res = $this->DBModel->get($where);
         if (!count($res)) {
             echo json_encode(array("res"=>"查找到0个用户"));
         } else {
             echo json_encode($res[0]);
         }*/



}