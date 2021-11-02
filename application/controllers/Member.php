<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

	public function index()
	{
		$data['title'] = "My Profile";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/sidebar', $data);
		$this->load->view('admin/topbar', $data);
		$this->load->view('admin/V_user', $data);
		$this->load->view('admin/footer');
	}
}
