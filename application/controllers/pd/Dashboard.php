<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->model('M_dashboard');
	}

	public function index()
	{
		$admin_log = $this->auth->is_login_admin();

		// $data['program'] = $this->M_dashboard->getCountProgram($admin_log['user_id']);
		// $data['kegiatan'] = $this->M_dashboard->getCountKegiatan($admin_log['user_id']);
		// $data['indikator'] = $this->M_dashboard->getCountIndikator($admin_log['user_id']);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('layout/pd/content.php');
		$this->load->view('layout/pd/footer.php');
		
		
	}
}
