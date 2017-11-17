<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/11/15
 * Time: 19:09
 */

class Orders extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DBModel');
        $this->DBModel->setTable('orders');
    }

    /* ajax请求，不返回页面
     * 插入预约信息，必须传入的字段有：
     * orderdate ordertime dc_id
     * 可选字段有：
     * introduction experience head
     */
    function insert(){
        $info = array(
            'account_id' =>$_SESSION['account_id'],
            'orderdate'=>date("Y-m-d"),
            'ordertime'=>date("h:i:s"),
            'dc_id'=>$_POST['dc_id']
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
            'dc_id'=>$_POST['dc_id']
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
            'orderdate'=>$_POST['orderdate'],
            'dc_id'=>$_POST['dc_id']
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