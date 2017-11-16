<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/10/27
 * Time: 16:23
 */

/*可用$this->db->last_query();对最后一次SQL语句进行查看*/
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
    function get($where='1=1')
    {
        $result = $this->db->select('*')
            ->from($this->table)
            ->where($where)
            ->get();
        return $result->result_array();
    }

    /*修改信息，info为修改的字段名-值*/
    function update($info, $where='1=1')
    {
        $query = $this->db->update($this->table, $info, $where);
        return $query;
    }

    /* 删除信息*/
    function delete($where='1=1')
    {
        $query = $this->db->delete($this->table, $where);
        return $query;
    }

    /***/
}