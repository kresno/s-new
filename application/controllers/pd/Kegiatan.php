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
		$this->load->library('Auth');
		$this->load->model('M_trx_program');
		$this->load->model('M_kegiatan');
		$this->load->model('M_indikator_kegiatan');
	}


	public function index()
	{
		$admin_log = $this->auth->is_login_admin();
		$data['kegiatan'] = $this->M_kegiatan->getAllById($admin_log['user_id']);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/kegiatan/index.php', $data);
		$this->load->view('layout/pd/footer.php');	
	}

	public function create()
	{
		$admin_log = $this->auth->is_login_admin();
		$data['indikator'] = $this->M_trx_program->getAllById($admin_log['user_id']);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/kegiatan/create.php', $data);
		$this->load->view('layout/pd/footer.php');
	}

	public function store()
	{
		$admin_log = $this->auth->is_login_admin();

		$data = array();	
        $data['indikator_id']=$this->input->post('indikator_id');
        $data['nama']=$this->input->post('kegiatan');		
		$data['user_id'] = $admin_log['user_id'];
		$response = $this->M_kegiatan->insert($data);

		if($response)
		{
			redirect('pd/kegiatan', 'refresh');
		} 

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
		$response = $this->M_kegiatan->delete($id);
		if($response)
		{
			redirect('pd/kegiatan', 'refresh');
		} 
	}
}
