<?php

class Pembelian extends Controller {
	
	public function __construct()
	{	
		if($_SESSION['session_login'] != 'sudah_login') {
			Flasher::setMessage('Login','Tidak ditemukan.','danger');
			header('location: '. base_url . '/login');
			exit;
		}
	}
	
	public function index()
	{
		$data['title'] = 'Data Pembelian';
		$data['pembelian'] = $this->model('PembelianModel')->getAllPembelian();
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pembelian/index', $data);
		$this->view('templates/footer');
	}

	
	public function cari()
	{
		$data['title'] = 'Data Pembelian';
		$data['pembelian'] = $this->model('PembelianModel')->cariPembelian();
		$data['key'] = $_POST['key'];
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pembelian/index', $data);
		$this->view('templates/footer');
	}


	public function tambah(){
		$data['title'] = 'Tambah Pembelian';		
		$data['barang'] = $this->model('BarangModel')->getAllBarang();		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('pembelian/create', $data);
		$this->view('templates/footer');
	}

	public function simpanPembelian(){		

		if( $this->model('PembelianModel')->tambahPembelian($_POST) > 0 ) {
			Flasher::setMessage('Berhasil','ditambahkan','success');
			header('location: '. base_url . '/pembelian');
			exit;			
		}else{
			Flasher::setMessage('Gagal','ditambahkan','danger');
			header('location: '. base_url . '/pembelian');
			exit;	
		}
	}

}