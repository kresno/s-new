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
		$this->load->library('Auth');
		$this->load->model('M_trx_program');
		$this->load->model('M_program');
		$this->load->model('M_indikatorsasaran');
	}

	public function index()
	{
		$admin_log = $this->auth->is_login_admin();
		$data['program'] = $this->M_program->getAllById($admin_log['user_id']);

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

	public function store()
	{
		$admin_log = $this->auth->is_login_admin();

		$data = array();	
		$data['program_id']=$this->input->post('program');
		$data['indikator_id']=$this->input->post('indikator_sasaran');
		$data['ksatu'] = $this->input->post('ksatu');
		$data['kdua'] = $this->input->post('kdua');
		$data['ktiga'] = $this->input->post('ktiga');
		$data['user_id'] = $admin_log['user_id'];

		$response = $this->M_trx_program->insert($data);
		if($response){
			redirect('pd/program', 'refresh');
		}
		
	}


	public function edit($id)
	{
		$admin_log = $this->auth->is_login_admin();
		$data = array();
		$hasil = array();
		
		$data['user'] = $admin_log['user_id'];
		$data['program'] = $id;
		
		$hasil['hasil'] = $this->M_program->getByProgramId($data);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/program/edit.php', $hasil);
		$this->load->view('layout/pd/footer.php');
	}

	public function update($id)
	{
		$admin_log = $this->auth->is_login_admin();

		$data = array();	
		$data['ksatu'] = $this->input->post('ksatu');
		$data['kdua'] = $this->input->post('kdua');
		$data['ktiga'] = $this->input->post('ktiga');
		$data['user_id'] = $admin_log['user_id'];

		$response = $this->M_trx_program->update($data, $id);
		if($response){
			redirect('pd/program', 'refresh');
		}
		
	}
}
