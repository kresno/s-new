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
	function __construct()
	{
		parent::__construct();
		$this->load->library('Auth');
		$this->load->model('M_kegiatan');
		$this->load->model('M_laporan');
		$this->load->model('M_indikator_kegiatan');
	}
	
	public function tri_satu()
	{
		$admin_log = $this->auth->is_login_admin();
		$data['kegiatan'] = $this->M_kegiatan->getAllById($admin_log['user_id']);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/laporan/create_satu.php', $data);
		$this->load->view('layout/pd/footer.php');	
	}
	
	public function tri_dua()
	{
		$admin_log = $this->auth->is_login_admin();
		$data['kegiatan'] = $this->M_kegiatan->getAllById($admin_log['user_id']);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/laporan/create_dua.php', $data);
		$this->load->view('layout/pd/footer.php');	
	}

	public function tri_tiga()
	{
		$admin_log = $this->auth->is_login_admin();
		$data['kegiatan'] = $this->M_kegiatan->getAllById($admin_log['user_id']);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/laporan/create_tiga.php', $data);
		$this->load->view('layout/pd/footer.php');	
	}
	
	public function tri_empat()
	{
		$admin_log = $this->auth->is_login_admin();
		$data['kegiatan'] = $this->M_kegiatan->getAllById($admin_log['user_id']);

		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/laporan/create_empat.php', $data);
		$this->load->view('layout/pd/footer.php');	
	}

	public function post_tri($id)
	{
		$data = array();
		$output_id = $this->input->post('output');
		if($id==1){
			$data['kempat'] = $this->input->post('kempat');
			$data['rempat'] = $this->input->post('rempat');
			$response = $this->M_laporan->update($data, $output_id);
			if($response)
			{
				redirect('pd/dashboard', 'refresh');
			}
		}
			else if($id==2){
				$data['klima'] = $this->input->post('klima');
				$data['rlima'] = $this->input->post('rlima');
				$response = $this->M_laporan->update($data, $output_id);
				if($response)
				{
					redirect('pd/dashboard', 'refresh');
				}
			}
				else if($id==3){
					$data['kenam'] = $this->input->post('kenam');
					$data['renam'] = $this->input->post('renam');
					$response = $this->M_laporan->update($data, $output_id);
					if($response)
					{
						redirect('pd/dashboard', 'refresh');
					}
				} else
					{
						$data['ktujuh'] = $this->input->post('ktujuh');
						$data['rtujuh'] = $this->input->post('rtujuh');
						$response = $this->M_laporan->update($data, $output_id);
						if($response)
						{
							redirect('pd/dashboard', 'refresh');
						}
					}
		// $response = $this->M_laporan->update($data, $output_id);

		// var_dump($data);
		// if($response)
		// {
		// 	redirect('pd/dashboard', 'refresh');
		// } 
					
	}

	public function view_report()
	{
		$data = array();
		
		$this->load->view('pd/laporan/print.php');
	}

	public function post_print()
	{
		$this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/laporan/test_print.php');
		$this->load->view('layout/pd/footer.php');	
	}
	
}
