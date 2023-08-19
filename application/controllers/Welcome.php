<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		$this->data['slider_motor'] = $this->db->get('tbl_slider_motor')->result();
		$this->data['slider_about'] = $this->db->get('tbl_slider_about')->result();
		$this->data['about'] = $this->db->get('tbl_about_us')->row();
		$this->data['keunggulan'] = $this->db->get('tbl_keunggulan')->result();
		$this->data['tm'] = $this->db->get('tbl_tukar_motor')->row();
		$this->data['ma'] = $this->db->get('tbl_mobile_aplikasi')->row();
		$this->data['slider_mobile'] = $this->db->get('tbl_slider_mobile')->result();
		$this->data['service_point'] = $this->db->get('tbl_service_point')->result();

		$this->data['dc1'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 1))->row();
		$this->data['dc2'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 2))->row();
		$this->data['dc3'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 3))->row();
		$this->data['dc4'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 4))->row();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
}