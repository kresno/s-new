<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('layout/pd/content.php');
		$this->load->view('layout/pd/footer.php');	
	}
	
	public function tri_satu()
	{
		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('layout/pd/content.php');
		$this->load->view('layout/pd/footer.php');	
	}
	
	public function tri_dua()
	{
		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('layout/pd/content.php');
		$this->load->view('layout/pd/footer.php');	
	}

	public function tri_tiga()
	{
		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('layout/pd/content.php');
		$this->load->view('layout/pd/footer.php');	
	}
	
	public function tri_empat()
	{
		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('layout/pd/content.php');
		$this->load->view('layout/pd/footer.php');	
	}

	public function print()
	{
		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('layout/pd/content.php');
		$this->load->view('layout/pd/footer.php');	
	}
	
}
