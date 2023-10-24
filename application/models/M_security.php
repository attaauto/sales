<?php

class M_security Extends CI_Model {

	public function getSecurity()
	{
		if (empty($this->session->userdata('username'))) {
			$this->session->sess_destroy();
			redirect('panel', 'refresh');
		}
	}

}