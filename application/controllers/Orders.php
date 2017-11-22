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
        $this->load->library('session');//引入session，
        $this->load->model('DBModel');
        $this->DBModel->setTable('orders');
    }

    /* ajax请求，不返回页面
     * 插入预约信息，必须传入的字段有：
     * orderdate(2017-11-17) ordertime(15:59:59) dc_id
     */
    function insert()
    {
        $info = array(
            'account_id' => $_SESSION['account_id'],
            'orderdate' => $_POST["date"],
            'ordertime' => $_POST["time"],
            'dc_id' => $_POST['dc_id']
        );
        $res = $this->DBModel->insert($info);
        if ($res) {
            echo '<script>alert("添加成功")</script>';
            $data['res'] = $this->DBModel->db
                ->query("SELECT * FROM `account`, `orders`, `dc_info` WHERE `account`.`account_id` = `orders`.`account_id` AND `dc_info`.`dc_id` = `orders`.`dc_id` AND `account`.`account_id`=".$this->session->userdata["account_id"])
                ->result_array();
            $this->load->view('person',$data);
        } else {
            echo '添加预约失败,检查语句:' . $this->DBModel->db->last_query();
        }
    }

    /* ajax请求，不返回页面
     * 删除预约信息，必须传入的字段有：
     * order_id
     */
    function delete()
    {
        $info = array(
            'order_id' => $_SESSION['order_id']
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
     * order_id
     * 可选字段(请勿添加不存在的字段)有：
     * orderdate(2017-11-17) ordertime(15:59:59) dc_id
     */
    function update()
    {
        $where = array(
            "order_id" => $_POST["order_id"]
        );
        $info = array();
        array_key_exists("orderdate", $_POST) ? $info["orderdate"] = $_POST["orderdate"] : null;
        array_key_exists("ordertime", $_POST) ? $info["ordertime"] = $_POST["ordertime"] : null;
        array_key_exists("dc_id", $_POST) ? $info["dc_id"] = $_POST["dc_id"] : null;
        if (count($info)) {
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
    function get()
    {
        $where = array();
        array_key_exists("account_id", $_GET) ? $where["account_id"] = $_GET["account_id"] : null;
        $res = $this->DBModel->get($where);
        json_encode($res);
    }
}