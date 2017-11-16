<?php
/**
 * Created by PhpStorm.
 * User: njche
 * Date: 2017/11/15
 * Time: 19:10
 */

class Subject extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('DBModel');
        $this->DBModel->setTable('subjects');
    }

    function index()
    {
        echo '这是默认方法';
        $this->load->view('success');
    }
    function insertDoc(){
        $info = array(
            "name" => $_POST["name"],
            "sex" => $_POST["sex"],
            "position" => $_POST["position"],
            "subject" => $_POST["subject"],
            "skill" => $_POST["skill"],
            "room" => $_POST["room"]
        );
        $this->DBModel->insert($info);
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
    function getDoc(){
        $this->DBModel->get();
    }
}