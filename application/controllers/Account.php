<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/11/15
 * Time: 19:05
 */

class Account extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('DBModel');
        $this->DBModel->setTable('account');
    }

    function index()
    {
        echo '这是默认方法';
        $this->load->view('success');
    }
    function insertAcc(){
        /*$info = array(
            "account" => $_POST["account"],
            "password" => $_POST["password"],
            "contact" => $_POST["tel"],
            "nickname" => $_POST["nickname"]
        );*/
        $info = array(
            "account" => 'admin',
            "password" => 'admin',
            "contact" => '12346698521',
            "nickname" => '神经病吧'
        );
        var_dump($_POST);
        echo $this->DBModel->insert($info);
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
    function getAcc(){
        $where = array(
            "account" => 'admin',
            "password" => 'admin'
        );
        $res = $this->DBModel->get($where);
        echo json_encode($res);
    }
}