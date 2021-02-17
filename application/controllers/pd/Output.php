<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Output extends CI_Controller {

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
		$this->load->model('m_output');
	}

	public function create($id)
	{
        $data['kegiatan'] = $this->M_kegiatan->getById($id);

        $this->load->view('layout/pd/header.php');
		$this->load->view('layout/pd/sidebar.php');
		$this->load->view('pd/output/create.php', $data);
		$this->load->view('layout/pd/footer.php');	
    }

    public function store()
    {
		$data = array();	
        
		//data umum
		$data['kegiatan_id']=$this->input->post('kegiatan');
        $data['tolak_ukur']=$this->input->post('output');
        $data['satuan']=$this->input->post('satuan');

		//data target rpjmd
		$data['ksatu']= $this->input->post('target_rpjmd');
		$data['rsatu']= $this->input->post('target_pagu_rpjmd');
		$data['kdua']= $this->input->post('target_n2');
		$data['rdua']= $this->input->post('target_pagu_n2');
		$data['ktiga']= $this->input->post('target_n1');
		$data['rtiga']= $this->input->post('target_pagu_n1');


		//data target realisasi per triwulan
		$data['kempat']= $this->input->post('realisasi_tri1');
		$data['rempat']= $this->input->post('realisasi_pagu_tri1');
		$data['klima']= $this->input->post('realisasi_tri2');
		$data['rlima']= $this->input->post('realisasi_pagu_tri2');
		$data['kenam']= $this->input->post('realisasi_tri3');
		$data['renam']= $this->input->post('realisasi_pagu_tri3');
		$data['ktujuh']= $this->input->post('realisasi_tri4');
		$data['rtujuh']= $this->input->post('realisasi_pagu_tri4');
        
        $response = $this->M_kegiatan->createOutput($data);
        if($response)
        {
            redirect('pd/kegiatan');
        }
	}
	
	public function getOutputByKegId($id)
	{
		$data = array();
		$data = $this->M_Output->getByKegId($id);
		echo json_encode($data);
	}

}
