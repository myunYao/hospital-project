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
        $this->load->helper('url');
        $this->load->model('DBModel');
        $this->DBModel->setTable('account');

    }

    function index()
    {
        echo '这是默认方法';
        $this->load->view('success');
    }

    function insertAcc()
    {
        $res = $this->DBModel->insert($_POST);
        if ($res) {
            echo '成功';
        } else {
            echo '失败';
        }
    }
}

function deleteDoc()
{
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

function updateDoc()
{
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

function getAcc()
{
    $where = array(
        "account" => $_POST['account'],
        "password" => md5($_POST['password']),
    );

    $res = $this->DBModel->get($where);
    echo $this->DBModel->db->last_query();
    var_dump($res[0]["degree"]);
    if (!count($res)) {
        echo '没有找到数据';
        return;
    } else {
        echo json_encode($res);
    }
}
