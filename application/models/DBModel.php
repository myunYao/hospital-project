<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/10/27
 * Time: 16:23
 */

class DBModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    function setTable($table)
    {
        $this->table = $table;//表名('dc_info account fastorders orders subjects')
    }

    /*增加数据*/
    function insert($info)
    {
        $query = $this->db->insert($this->table, $info);
        return $query;
    }

    /*查询数据*/
    function get($where)
    {
        $result = $this->db->select('*')
            ->from($this->table)
            ->where($where)
            ->get();
//        echo $this->db->last_query();
//        var_dump($result->result_array()) ;
        return $result->result_array();
    }

    /*修改信息*/
    function update($info, $where)
    {
        $query = $this->db->update($this->table, $info, $where);
        return $query;
    }

    /* 删除信息*/
    function delete($where)
    {
        $query = $this->db->delete($this->table, $where);
        return $query;
    }

    /***/
}