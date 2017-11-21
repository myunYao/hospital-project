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
        $this->load->library('session');
        $this->load->model('DBModel');
        $this->DBModel->setTable('fastorders');
    }

    function index()
    {
        echo '这是默认方法';
        $this->load->view('success');
    }
    /* ajax请求，不返回页面
     * 插入预约信息，必须传入的字段有：
     * orderdate(2017-11-17) ordertime(15:59:59) subject
     */
    function insert(){
       // var_dump($_POST) ;
      $info = array(
          'account_id' =>$_SESSION['account_id'],
          'orderdate'=>$_POST['date'],
          'ordertime'=>$_POST['time'],
          'subject'=>$_POST['sub'],
        );
        $res = $this->DBModel->insert($info);

        if ($res) {
            $this->load->view("person");
        } else {
            echo '添加预约失败,检查语句:' . $this->DBModel->db->last_query();
        }
    }
    /* ajax请求，不返回页面
     * 删除预约信息，必须传入的字段有：
     * fastorder_id
     */
    function delete(){
        $info = array(
            'fastorder_id' =>$_POST['fastorder_id']
        );
        $res = $this->DBModel->delete($info);
        if ($res) {
            echo '成功';
        } else {
            echo '删除预约失败,检查语句:' . $this->DBModel->db->last_query();
        }
    }
    /* ajax请求，不返回页面
     * 修改预约信息，必须传入的字段有：
     * fasteorder_id
     * 可选字段(请勿添加不存在的字段)有：
     * orderdate(2017-11-17) ordertime(15:59:59) subject
     */
    function update(){
        $where = array(
            "fastorder_id"=>$_POST["fastorder_id"]
        );
        $info = array();
        array_key_exists("orderdate", $_POST) ? $info["orderdate"] = $_POST["orderdate"] : null;
        array_key_exists("ordertime", $_POST) ? $info["ordertime"] = $_POST["ordertime"] : null;
        array_key_exists("subject", $_POST) ? $info["dc_id"] = $_POST["subject"] : null;
        if (count($info)){
            $res = $this->DBModel->update($info, $where);
            if ($res) {
                echo '成功';
            } else {
                echo '修改失败,检查语句:' . $this->DBModel->db->last_query();
            }
        }
    }
    /* ajax请求，返回json数组，包含了相应的预约对象
     * 默认查找全部信息
     */
    function get(){
        $res = $this->DBModel->get();
        json_encode($res);
    }
}