<?php
    require_once("./Models/work.php");
class WorkController
{
    var $work_model;
    public function __construct()
    {
        $this->work_model = new work();
    }
    function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id > 1) {
                $id = 0;
            }
            $data = $this->work_model->trangthai($id);
        } else {
            $data = $this->work_model->All();
        }
        require_once("./Views/index.php");
    }
    function xetduyet()
    {
        $data = array(
            'maCV' => $_GET['id'],
            'tinhTrang' => 1
        );
        $this->work_model->update($data);
    }
    function delete()
    {
        if (isset($_GET['id'])) {
            $this->work_model->delete($_GET['id']);
        }
    }
    function chitiet()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->work_model->chitietcongviec($id);
        require_once("./Views/index.php");
    }
    
}
