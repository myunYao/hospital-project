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
        echo '这是默认方法,你应该在后面加上路由';
    }

    /* ajax请求，不返回页面
     * 插入医生信息，必须传入的字段有：
     * name sex position subject skill room
     * 可选字段有：
     * introduction experience head
     */
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
        array_key_exists("introduction", $_POST) ? $info["introduction"] = $_POST["introduction"] : null;
        array_key_exists("experience", $_POST) ? $info["experience"] = $_POST["experience"] : null;
        array_key_exists("head", $_POST) ? $info["head"] = $_POST["head"] : null;
        $res = $this->DBModel->insert($info);
        if ($res) {
            echo '成功添加医生';
        } else {
            echo '添加医生失败,检查语句:' . $this->DBModel->db->last_query();
        }
    }

    /* ajax请求，不返回页面
     * 删除医生信息，唯一字段有：
     * dc_id
     */
    function deleteDoc()
    {
        $where = array(
            "dc_id" => $_POST["dc_id"]
        );
        $res = $this->DBModel->delete($where);
        if ($res) {
            echo '成功';
        } else {
            echo '删除失败，检查插入语句：' . $this->DBModel->db->last_query();
        }
    }

    /* ajax请求，不返回页面
     * 修改医生信息，必须传入的字段有：
     * dc_id
     * 可选字段(请勿添加不存在的字段)有：
     * name sex position subject skill room introduction experience head
     */
    function updateDoc()
    {
        $info = $_POST;
        $where = array(
            "dc_id" => $_POST["dc_id"]
        );
        $res = $this->DBModel->update($info, $where);
        if ($res) {
            echo '成功修改医生信息';
        } else {
            echo '修改失败，检查插入语句：' . $this->DBModel->db->last_query();
        }
    }
    /* ajax请求，返回json数组，包含了相应的医生对象
     * 默认查找全部信息
     * 可选字段有：
     * subject name sex position room
     */
    function getDoc()
    {
        $where = array();
        array_key_exists("subject", $_POST) ? $info["subject"] = $_POST["subject"] : null;
        array_key_exists("name", $_POST) ? $info["name"] = $_POST["name"] : null;
        array_key_exists("sex", $_POST) ? $info["sex"] = $_POST["sex"] : null;
        array_key_exists("position", $_POST) ? $info["position"] = $_POST["position"] : null;
        array_key_exists("room", $_POST) ? $info["room"] = $_POST["room"] : null;
        if (count($where)){
            $res = $this->DBModel->get($where);
        }else{
            $res = $this->DBModel->get();
        }
        echo json_encode($res);
    }
}