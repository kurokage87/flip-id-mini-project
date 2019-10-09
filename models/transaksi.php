<?php
include_once "config/db.php";

class ModelTransaksi
{

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function tampilData()
    {
        $tampil = $this->db->query("SELECT * FROM transaksi");
        return $tampil;
    }

    public function createData($arrData, $requst)
    {
        $response_json = $arrData;
        $request_json = json_encode($requst);
        $link = $requst['api_link'];
        $dataParams = json_decode($arrData);

        $exec = $this->db->query(
            "INSERT INTO transaksi (transaction_code, amount, transaction_status, bank_code, account_number, beneficiary_name, remark, receipt, fee, time_request, respon_json, request_json, api_link)
        VALUES ($dataParams->id, $dataParams->amount, '$dataParams->status', '$dataParams->bank_code', '$dataParams->account_number','$dataParams->beneficiary_name','$dataParams->remark','$dataParams->receipt',$dataParams->fee, NOW(), '$response_json','$request_json','$link')"
        );
    }

    public function updateStatus($arrData, $id)
    {
        $response_json = $arrData;
        // $request_json = json_encode($requst);
        $dataParams = json_decode($arrData);
        $exec = $this->db->query(
            "UPDATE transaksi SET transaction_status = '$dataParams->status', receipt='$dataParams->receipt',
            time_update_status=NOW() where transaction_code=$id"
        );
    }

    public function detailData($id)
    {
        $data = $this->db->query("SELECT * FROM transaksi where transaction_code = $id");
        return $data;
    }

    public function get($url, $header)
    {
        $ch = curl_init();

        $secret_key = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

        curl_setopt($ch, CURLOPT_USERPWD, $secret_key . ":");

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;

    }

    public function post($param, $url, $header)
    {
        $ch = curl_init();

        $secret_key = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_USERPWD, $secret_key . ":");

        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
}
