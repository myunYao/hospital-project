<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/10/31
 * Time: 10:48
 */

class Swiftest extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    function index(){
        if (array_key_exists("account_id",$_GET) &&
            array_key_exists("pwd",$_GET)){
            $sess = array(
                "account_id"=>$_GET["account_id"],
                "pwd" => $_GET["pwd"],
                "nickname" => $_GET["nickname"]
            );
            $this->session->set_userdata($sess);
        }
        $this->load->view('swiftest');
    }

}