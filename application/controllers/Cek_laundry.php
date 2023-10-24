<?php

class Cek_laundry Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_cek_laundry');
    }

    public function index()
    {
        $kode_transaksi = $this->input->post('kode_transaksi');
        $isi['data'] = $this->M_cek_laundry->cek_status($kode_transaksi);
        $isi['slider'] = $this->db->get('slider')->result();
        $this->load->view('frontend/header', $isi);
        $this->load->view('frontend/cek_laundry', $isi);
        $this->load->view('frontend/footer');
    }

}