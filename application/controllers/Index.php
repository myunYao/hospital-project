<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/10/31
 * Time: 10:48
 */

class Index extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DBModel');
        $this->DBModel->setTable('account');
        $this->load->library('session');//引入session，
        //设置使用$this->session->set_userdata(),取出使用$this->session->userdata['字符串']

        if (array_key_exists("account", $_GET) &&
            array_key_exists("id", $_GET)) {
            $res = $this->DBModel->get(array("account_id" => $_GET["id"]));
            $sess = array(
                "account" => $_GET["account"],
                "id" => $_GET['id'],
                "nickname" => $res[0]["nickname"],
                "pwd" => $res[0]["password"]
            );
            $this->session->set_userdata($sess);
        } else {
            $this->session->set_userdata(array("nickname" => "游客"));
        }

//        $this->session->set_userdata();
//        $this->session->userdata['username'];
//        $this->session->userdata['字符串'];
    }

    function index()
    {
        $this->load->view('index');
    }

}