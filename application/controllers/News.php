<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/10/31
 * Time: 10:48
 */

class News extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DBModel');
        $this->DBModel->setTable('news');
    }
    function index(){
        $data['news'] = $this->DBModel->get();

       /* if (!count($data)) {
            echo '查找到0个新闻';
        } else {
            echo json_encode($data);
        }*/
        $this->load->view('news',$data);
    }

}