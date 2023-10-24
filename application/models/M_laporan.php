<?php

class M_laporan Extends CI_Model {

	public function filter_laporan($tgl_mulai, $tgl_selesai)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('konsumen', 'transaksi.kode_konsumen = konsumen.kode_konsumen', 'left');
		$this->db->join('paket', 'transaksi.kode_paket = paket.kode_paket', 'left');
		$this->db->where('transaksi.tgl_masuk>=', $tgl_mulai);
		$this->db->where('transaksi.tgl_masuk<=', $tgl_selesai);
		return $this->db->get()->result();
	}
}