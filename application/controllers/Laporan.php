<?php

class Laporan Extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    $this->load->model('m_laporan');
    $this->load->helper('tgl_indo_helper');
  }

	public function index()
	{
		$isi['content'] = 'backend/laporan/f_laporan';
		$isi['judul'] = 'Laporan Transaksi';
		$this->load->view('backend/dashboard', $isi);
	}

	public function cetak_laporan()
	{
		$this->load->library('dompdf_gen');
		$tgl_mulai = $this->input->post('tanggal_mulai');
		$tgl_selesai = $this->input->post('tanggal_selesai');
		$isi['laporan'] = $this->m_laporan->filter_laporan($tgl_mulai, $tgl_selesai);
		$this->session->set_userdata('tanggal_mulai', $tgl_mulai);
		$this->session->set_userdata('tanggal_selesai', $tgl_selesai);
		$this->load->view('backend/laporan/cetak_laporan', $isi);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Transaksi", array('Attachment'=>0));
	}

}