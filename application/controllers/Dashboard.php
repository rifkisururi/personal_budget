<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Rekening_model');
        $this->load->model('Transaksi_model');
    }

    function index()
    {
		$id_pengguna = $this->session->userdata("id");

        $saldo = $this->Rekening_model->getsaldo();

        $totalPengeluaranBulanIni = $this->Transaksi_model->totalPengeluaranBulanIni();
        $totalPemasukanBulanIni = $this->Transaksi_model->totalPemasukanBulanIni();

        $pengeluaranPerCategory = $this->Transaksi_model->pengeluaranPerCategory();
        $PemasukanPerCategory = $this->Transaksi_model->pemasukanPerCategory();


        $data['totalPengeluaranBulanIni'] = $totalPengeluaranBulanIni;
        $data['totalPemasukanBulanIni'] = $totalPemasukanBulanIni;

        
        $data['pengeluaranPerCategory'] = $pengeluaranPerCategory;
        $data['PemasukanPerCategory'] = $PemasukanPerCategory;
        $data['saldo'] = $saldo;
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main',$data);
    }
}
