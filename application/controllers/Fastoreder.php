<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/11/15
 * Time: 19:09
 */

class Fastoreder extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DBModel');
        $this->DBModel->setTable('fastorders');
    }

    function index()
    {
        echo '这是默认方法';
        $this->load->view('success');
    }
    function insert(){
        $info = array(
            'account_id' =>$_SESSION['account_id'],
            'orderdate'=>date("Y-m-d"),
            'ordertime'=>date("h:i:s"),
            'subject'=>$_POST['subject']
        );
        $res = $this->DBModel->insert($info);
        if($res){
            echo '成功添加';
        }else{
            echo '失败';
        }
    }
    function delete(){
        $info = array(
            'account_id' =>$_SESSION['account_id'],
            'orderdate'=>$_POST['orderdate'],
            'subject'=>$_POST['subject']
        );
        $res = $this->DBModel->delete($info);
        if ($res){
            echo '操作成功';
        }else{
            echo '操作失败';
        }
    }
    function update(){
        $info = $_POST;
        $where = array(
            'account_id' => $_SESSION['account_id'],
            'orderdate'=>$_POST['orderdate']
        );
        $res = $this->DBModel->update($info,$where);
        if ($res){
            echo '操作成功';
        }else{
            echo '操作失败';
        }
    }
    function get(){
        $res = $this->DBModel->get();
        var_dump($res);
    }
}