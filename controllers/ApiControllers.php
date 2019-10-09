<?php 
include_once("models/transaksi.php");

class ApiController
{
    public $model;

    public function __construct()
    {
        $this->model = new ModelTransaksi();
    }

    public function index()
	{
		require_once('view/index.php');
	}

    public function tampil_data(){
        $data = $this->model->tampilData();
        require_once('view/list_data.php');
    }

    public function create_data(){

        $header = array(
            "Content-Type: application/x-www-form-urlencoded",
        );

        $url = "https://nextar.flip.id/disburse";

        $arrData = [
            "account_number" =>$_POST['account_number'],
			"bank_code" => $_POST['bank_code'],
			"amount" =>$_POST['amount'],
            "remark" =>$_POST['remark'],
            "api_link" => $url
        ];

        
        
        $result = $this->model->post($arrData, $url, $header);
        $this->model->createData($result, $arrData);
        $this->tampil_data();
    }


    public function data_detail(){
        $id = $_GET['id'];
        $data = $this->model->detailData($id);
        require_once('view/detailData.php');
    }

    public function update_data(){
        $id = $_GET['id'];
        $header = array(
            "Content-Type: application/x-www-form-urlencoded",
        );

        $url = "https://nextar.flip.id/disburse/".$id;

        $result = $this->model->get($url, $header);
        $this->model->updateStatus($result, $id);
        $this->tampil_data();
    }
}


?>