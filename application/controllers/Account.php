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
        echo '这是一个接口，数据访问请添加路由';
//        $this->load->view('success');///
    }

    /* ajax请求，不返回页面
     * 插入账号数据，必须传入的字段有：
     * account password contact nickname
     * 可选字段有：
     * head degree
     */
    function insertAcc()
    {
        $info = array(
            "account" => $_POST["account"],
            "password" => md5($_POST["password"]),
            "contact" => $_POST["contact"],
            "nickname" => $_POST["nickname"],
        );
        array_key_exists("degree", $_POST) ? $info["degree"] = $_POST["degree"] : null;
        array_key_exists("head", $_POST) ? $info["head"] = $_POST["head"] : null;
        //判断是否重复账号
        $res = $this->DBModel->get(array("account" => $_POST["account"],));
        if ($res){
            //重复名则返回这个
            echo json_encode(array("res"=>'exist'));
        }else{
            $res = $this->DBModel->insert($info);
            if ($res) {
                echo json_encode(array("res"=>'success'));
            } else {
                echo '失败，检查插入语句：' . $this->DBModel->db->last_query();
            }
        }
    }

    /* ajax请求，不返回页面
     * 删除账号数据，唯一传入的字段有：
     * account
     * 尽量不要使用此操作
     */
    function deleteAcc()
    {
        $where = array(
            "account" => $_POST["account"],
        );
        $this->DBModel->delete($where);
    }

    /* ajax请求，不返回页面
     * 修改账号数据，必须传入的字段有：
     * account password
     * 可选字段(至少传一个,不然此操作毫无意义)：
     * contact head nickname
     */
    function updateAcc()
    {
        $where = array(
            "account" => $_POST["account"],
            "password" => md5($_POST["password"])
        );
        $info = array();
        array_key_exists("contact", $_POST) ? $info["contact"] = $_POST["contact"] : null;
        array_key_exists("head", $_POST) ? $info["head"] = $_POST["head"] : null;
        array_key_exists("nickname", $_POST) ? $info["nickname"] = $_POST["nickname"] : null;
        $this->DBModel->update($where, $info);
    }

    /* ajax请求，返回json对象，包含了相应的账号对象
     * 验证账号密码数据，必须传入的字段有：
     * account password
     * 可选字段无
     */
    function getAcc()
    {
        $where = array(
            "account" => $_POST['account'],
            "password" => md5($_POST['password']),
        );
        $res = $this->DBModel->get($where);
//        echo $this->DBModel->db->last_query();
        if (!count($res)) {
            echo json_encode(array("res"=>"查找到0个用户"));
        } else {
            echo json_encode($res[0]);
        }
    }
}
