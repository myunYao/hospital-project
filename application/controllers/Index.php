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
        $this->load->library('session');//引入session，
        //设置使用$this->session->set_userdata(),取出使用$this->session->userdata['字符串']
    }
    function index(){
        $this->load->view('index');
    }

}