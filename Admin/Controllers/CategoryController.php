<?php
require_once("Models/category.php");
class CategoryController
{
	var $danhmuc_model;
	function __construct()
	{
		$this->danhmuc_model = new Category();
	}

	public function list()
	{
		$data = array();
		$data = $this->danhmuc_model->All(); 
		require_once("Views/index.php");
		
	}

	public function add()
	{
		require_once("Views/index.php");
	
	}
	public function store()
	{
        $target_dir = "./Publics/images/";
        $hinhAnh = "";
        $target_file = $target_dir . basename($_FILES["hinhAnh"]["name"]);
        $status_upload = move_uploaded_file($_FILES["hinhAnh"]["tmp_name"], $target_file);
        if ($status_upload) { 
            $hinhAnh = basename($_FILES['hinhAnh']['name']);
        }
		$data = array(
			'maDMCV' => $_POST['maDMCV'],
			'tenDM' => $_POST['tenDM'],
            'hinhAnh' => $_POST['hinhAnh']
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->danhmuc_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->danhmuc_model->find($id);
		require_once("Views/index.php");
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->danhmuc_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->danhmuc_model->find($id);
		require_once("Views/index.php");
	}
	public function update()
	{
		$target_dir = "./Publics/images/";
        $hinhAnh = "";
        $target_file = $target_dir . basename($_FILES["hinhAnh"]["name"]);
        $status_upload = move_uploaded_file($_FILES["hinhAnh"]["tmp_name"], $target_file);
        if ($status_upload) { 
            $hinhAnh = basename($_FILES['hinhAnh']['name']);
        }
		$data = array(
			'maDMCV' => $_POST['maDMCV'],
			'tenDM' => $_POST['tenDM'],
            'hinhAnh' => $_POST['hinhAnh']
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->danhmuc_model->update($data);
	}
}
