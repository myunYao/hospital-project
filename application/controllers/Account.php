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

    /* 添加用户
     * 至少4个字段"account" "password" "contact" "nickname"
     * 其它字段见数据表*/
    function insertAcc()
    {
        /*不允许用户名有重复的*/
        if ($this->DBModel->get(array(
            "account" => $_POST["account"],
        ))) {
            echo '已经存在的用户';
        } else {
            $info = array(
                "account" => $_POST["account"],
                "password" => $_POST["password"],
                "contact" => $_POST["contact"],
                "nickname" => $_POST["nickname"]
            );
            $res = $this->DBModel->insert($_POST);
            /*这里添加注册成功或失败跳转的页面*/
            if ($res){
                //$this->load->view('某某页面');
            }else{
                //$this->load->view('某某页面');
            }
        }
    }

    /*删除信息*/
    function deleteAcc()
    {
        /*根据账户名进行查找删除*/
        $where = array(
            "account" => $_POST["account"]
        );
        echo '需要最高级权限';
//        $this->DBModel->delete($where);
    }

    /*修改信息*/
    function updateAcc()
    {
        /*需要修改的数据集合，需要包含account字段*/
        $info = $_POST;
        $where = array(
            "account" => $_POST["account"]
        );
        /*如果修改了密码，将密码进行加密*/
        if(array_key_exists('password',$_POST)){
            $info['password'] = md5($_POST['password']);
        }
        echo $this->DBModel->update($info,$where);
    }

    /*获取用户*/
    function getAcc()
    {
        /* 数据请求用post
         * 需要给出account和password*
         * 返回账号信息全字段*/
        $where = array(
            "account" => $_POST['account'],
            "password" => md5($_POST['password'])
        );
        $res = $this->DBModel->get($where);
        echo $res;
    }
}