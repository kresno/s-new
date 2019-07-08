<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

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
		$this->load->model('M_kegiatan');
		$this->load->model('M_indikator_kegiatan');
	}


	public function index()
	{
		$data['kegiatan'] = $this->M_kegiatan->getAllById($id=1);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/kegiatan/index.php', $data);
		$this->load->view('layout/pd/footer.php');	
	}

	public function create()
	{
		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/kegiatan/create.php');
		$this->load->view('layout/pd/footer.php');
	}


	public function output($id)
	{
		$data['kegiatan']= $this->M_kegiatan->getById($id);
		$data['output']=$this->M_kegiatan->getOutputById($id);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/output/index.php',$data);
		$this->load->view('layout/pd/footer.php');
	}

	public function doDelete($id)
	{
		
	}
}
