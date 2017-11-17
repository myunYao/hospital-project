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
        echo '这是默认方法,你应该在后面加上路由';
    }

    /*添加医生，必要字段列举如下，其余见数据表*/
    function insertDoc()
    {
        $info = array(
            "name" => $_POST["name"],
            "sex" => $_POST["sex"],
            "position" => $_POST["position"],
            "subject" => $_POST["subject"],
            "skill" => $_POST["skill"],
            "room" => $_POST["room"]
        );
        $res = $this->DBModel->insert($info);
        if ($res) {
            echo '成功添加医生';
        } else {
            echo '添加医生失败';
        }
    }

    /*删除信息，字段如下*/
    function deleteDoc()
    {
        $where = array(
            "dc_id"=>$_POST["dc_id"]
        );
//        echo '需要权限';
        $res = $this->DBModel->delete($where);
        if ($res) {
            echo '成功';
        } else {
            echo '失败，检查插入语句：' . $this->DBModel->db->last_query();
        }
    }

    function updateDoc()
    {
        $info = $_POST;
        $where = array(
            "name" => $_POST["name"],
            "position" => $_POST["position"],
            "room" => $_POST["room"]
        );
        $res = $this->DBModel->update($info, $where);
        if ($res) {
            echo '成功修改医生信息';
        } else {
            echo '修改失败';
        }
    }

    function getDoc()
    {
        $where = array(
            'name' => $_POST['name']
        );
        $res = $this->DBModel->get();
//        echo 'cb(' . json_encode($res) . ')';
        var_dump($res);
    }
}