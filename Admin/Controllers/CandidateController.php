<?php
    require_once("./Models/candidate.php");
class CandidateController
{
    var $candidate_model;
    public function __construct()
    {
        $this->candidate_model = new candidate();
    }
    function list()
    {
        $data = array();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($id > 1) {
                $id = 0;
            }
            $data = $this->candidate_model->congviec($id);
        } else {
        }
        require_once("./Views/index.php");
    }
    function xetduyet()
    {
        $this->candidate_model->updateds($_GET['idcv'],$_GET['idtk']);
        require_once("./Views/index.php");
    }
    function chitiet()
    {
        $data = array();
        if (isset($_GET['tt'])) {
            $tt = $_GET['tt'];
            if ($tt > 1) {
                $tt = 0;
            }
            $data = $this->candidate_model->chitietungvien($_GET['id'],$tt);
        } else {
        }
        
        
        require_once("./Views/index.php");
    }
    function chitiethelp()
    {
        
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data_user = $this->candidate_model->chitietgiupviec($id);
        $data_dmcv = $this->candidate_model->danhmuc();     
        //lấy đánh giá
        $DataEvalute = $this->candidate_model->getEvalute($id);
        require_once("Views/index.php");
    }
    
}
