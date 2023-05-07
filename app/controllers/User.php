<?php

class User extends Controller {
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	} 

	public function index_pengguna()
	{
		$data['title'] = 'Data Pengguna';
		$data['pengguna'] = $this->model('UserModel')->getAllPengguna();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('user/index_pengguna', $data);
		$this->view('templates/footer');
	}

	public function index_pelanggan()
	{
		$data['title'] = 'Data Pelanggan';
		$data['pelanggan'] = $this->model('UserModel')->getAllPelanggan();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('user/index_pelanggan', $data);
		$this->view('templates/footer');
	}

	public function index_supplier()
	{
		$data['title'] = 'Data Supplier';
		$data['supplier'] = $this->model('UserModel')->getAllSupplier();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('user/index_supplier', $data);
		$this->view('templates/footer');
	}
	
	
}