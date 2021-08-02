<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        check_admin();
        
        $this->load->model('tampil_m');
        // $this->load->model('tampil_m', 'loket_m', 'antrian_m', 'antrianloket_m');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $loket = $this->tampil_m->get()->result();
        $data = array(
            'loket' => $loket,
        );
        $data['row'] = $this->tampil_m->get();
        $this->template->load('template', 'tampil_antrian/tampil_data', $data);
    }

    public function priview()
    {

        $this->load->model('loket_m');
        $data['row'] = $this->tampil_m->getAll();
        $this->template->load('template2', 'tampil_antrian/tampil_preview', $data);
    }

    public function petugas()
    {
        $loket = $this->tampil_m->get()->result();
        $data = array(
            'loket' => $loket,
        );
        $data['row'] = $this->tampil_m->getAll();
        // $this->load->view('tampil_antrian/tampil_petugas', $data);
        $this->template->load('template2', 'tampil_antrian/tampil_petugas', $data);
    }
}
