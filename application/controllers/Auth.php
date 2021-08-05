<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$this->load->view('login');
	}

    public function process()
    {
        $post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('user_m');
			$query = $this->user_m->login($post);
			if($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'userid' => $row->user_id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);

				?>
				<link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/sweetAlert2/sweetalert2.min.css">
				<script src="<?= base_url() ?>assets/bower_components/sweetAlert2/sweetalert2.min.js"></script>
				<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
				<style>
					body{
						font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
						font-size: 1.124rem;
						font-weight: normal;
					}
				</style>
				<body></body>
				<script>
					Swal.fire({
						icon: 'success',
						title: 'Sukses',
						text: 'Selamat, login berhasil!'
					}).then((result) => {
						window.location='<?=site_url('dashboard')?>';
        			})
				</script>
				<?php
			} else {
				?>
				<link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/sweetAlert2/sweetalert2.min.css">
				<script src="<?= base_url() ?>assets/bower_components/sweetAlert2/sweetalert2.min.js"></script>
				<style>
					body{
						font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
						font-size: 1.124rem;
						font-weight: normal;
					}
				</style>
				<body></body>
				<script>
					Swal.fire({
						icon: 'error',
						title: 'Login Gagal',
						text: 'Coba Lagi!'
					}).then((result) => {
						window.location='<?=site_url('auth/login')?>';
        			})
				</script>
				<?php
			}
		}
    }

    public function logout()
	{
		$params = array('userid', 'level');
		$this->session->unset_userdata($params);
		
		redirect('auth/login','refresh');
		
	}
}
