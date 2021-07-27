<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        check_not_login();     
        check_admin();  
        $this->load->model('tampil_m');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data['row'] = $this->tampil_m->get();
		$this->template->load('template', 'tampil_antrian/tampil_data', $data);
	}

    public function priview()
    {
        $data['row'] = $this->tampil_m->get();
		$this->template->load('template2', 'tampil_antrian/tampil_preview', $data);
    }

    public function petugas()
    {
        $data['row'] = $this->tampil_m->get();
		$this->template->load('template2', 'tampil_antrian/tampil_petugas', $data);
    }
}