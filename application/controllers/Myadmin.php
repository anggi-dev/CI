<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myadmin extends CI_Controller {

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
	public function index()
	{
		$data ['title'] = "Admin Web | STTB";
		$data ['b'] = "Welcome Admin STT Bandung";
		$this->load->view('headadm',$data);
		$this->load->view('dashboard');
		$this->load->view('footadm');
	}
	public function tambahdata(){
		$data ['title'] = "TAMBAH DATA | STT BANDUNG" ;
		$data ['b'] = "Welcome Admin STT Bandung";
		$this->load->view('headadm',$data);
		$this->load->view('modul/tambahdata');
		$this->load->view('footadm');
	}
	function aksi_tambah_data(){
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$semester = $this->input->post('semester');

		$data = array(
			'int_npm' = $npm,
			'str_nama' = $nama,
			'int_semester' == $semester,
		);

		$this->Model_admin->($data'data_mahasiswa');
		redirect('Myadmin/tambahdata')
	}
}
