<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/11/15
 * Time: 16:03
 * 处理医生信息表的增删改查
 */

class Doctor extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('DBModel');
        $this->DBModel->setTable('dc_info');
    }

    function index()
    {
        $info = array(
            "name" => '赵二麻',
            "sex" => '男',
            "position" => '神经外科主任助理',
            "subject" => '骨科',
            "skill" => '擅长搞好医患关系，处理主任内务',
            "room" => '201'
        );
//        $this->DBModel->insert($info);
        echo '这是默认方法';
    }

    function insertDoc(){
        $info = array(
            "name" => $_POST["name"],
            "sex" => $_POST["sex"],
            "position" => $_POST["position"],
            "subject" => $_POST["subject"],
            "skill" => $_POST["skill"],
            "room" => $_POST["room"]
        );
        $this->DBModel->insert($info);
    }
    function deleteDoc(){
        $info = array(
            "name" => $_POST["name"],
            "sex" => $_POST["sex"],
            "position" => $_POST["position"],
            "subject" => $_POST["subject"],
            "skill" => $_POST["skill"],
            "room" => $_POST["room"]
        );
        $this->DBModel->delete($info);
    }
    function updateDoc(){
        $info = array(
            "name" => $_POST["name"],
            "sex" => $_POST["sex"],
            "position" => $_POST["position"],
            "subject" => $_POST["subject"],
            "skill" => $_POST["skill"],
            "room" => $_POST["room"]
        );
        $this->DBModel->update($info);
    }
    function getDoc(){
        $res = $this->DBModel->get(array('name'=>'赵二麻'));
        echo 'cb('.json_encode($res).')';
        $this->load->view('system',$res);
        var_dump($res);
    }
}