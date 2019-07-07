<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

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

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_program');
		$this->load->model('M_indikatorsasaran');
	}

	public function index()
	{
		$data['program'] = $this->M_program->getAllById($id=1);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/program/index.php', $data);
		$this->load->view('layout/pd/footer.php');	
	}

	public function create()
	{
		$data['program'] = $this->M_program->getAll();
		$data['indikator_sasaran'] = $this->M_indikatorsasaran->getAll();

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/program/create.php', $data);
		$this->load->view('layout/pd/footer.php');
	}
}
