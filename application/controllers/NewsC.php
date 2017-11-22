<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/11/20
 * Time: 11:25
 */

class NewsC extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('DBModel');
        $this->DBModel->setTable('news');
    }

    function index()
    {
        echo '这是一个接口，数据访问请添加路由';
//        $this->load->view('success');///
    }

    /* ajax请求，不返回页面
     * 插入账号数据，必须传入的字段有：
     * title detail
     * 可选字段有：
     * author pubtime images
     */
    function insertNews()
    {
        $info = array(
            "title" => $_POST["title"],
            "detail" => $_POST["detail"]
        );
        array_key_exists("author", $_POST) ? $info["author"] = $_POST["author"] : null;
        array_key_exists("pubtime", $_POST) ? $info["pubtime"] = $_POST["pubtime"] : null;
        array_key_exists("images", $_POST) ? $info["images"] = $_POST["images"] : null;
        //判断是否重复标题
        $res = $this->DBModel->get(array("title" => $_POST["title"],));
        if ($res){
            //重复名则返回这个
            echo 'exist';
        }else{
            $res = $this->DBModel->insert($info);
            if ($res) {
                echo '<script>alert("添加成功")</script>';
                $this->load->view('Password');
            } else {
                echo '失败，检查插入语句：' . $this->DBModel->db->last_query();
            }
        }
    }

    /* ajax请求，不返回页面
     * 删除新闻
     * news_id
     */
    function deleteNews()
    {
        $where = array(
            "news_id" => $_POST["news_id"],
        );
        $this->DBModel->delete($where);
    }

    /* ajax请求，不返回页面
     * 修改新闻，必须传入的字段有：
     * news_id
     * 可选字段(至少传一个,不然此操作毫无意义)：
     * detail author pubtime images
     */
    function updateNews()
    {
        $where = array(
            "news_id" => $_POST["news_id"]
        );
        $info = array();
        array_key_exists("detail", $_POST) ? $info["detail"] = $_POST["detail"] : null;
        array_key_exists("author", $_POST) ? $info["author"] = $_POST["author"] : null;
        array_key_exists("pubtime", $_POST) ? $info["pubtime"] = $_POST["pubtime"] : null;
        array_key_exists("images", $_POST) ? $info["images"] = $_POST["images"] : null;
        $this->DBModel->update($where, $info);
    }

    /* ajax请求，返回json数组，包含了相应的账号对象
     * 默认返回全部文章
     * 可选字段
     * news_id title author
     */
    function getNews()
    {
        $where = array();
        array_key_exists("news_id", $_POST) ? $info["news_id"] = $_POST["news_id"] : null;
        array_key_exists("title", $_POST) ? $info["title"] = $_POST["title"] : null;
        array_key_exists("author", $_POST) ? $info["author"] = $_POST["author"] : null;
        $res = $this->DBModel->get($where);
//        echo $this->DBModel->db->last_query();
        if (!count($res)) {
            echo '查找到0个新闻';
        } else {
            echo json_encode($res);
        }
    }
}