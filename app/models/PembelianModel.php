<?php

class PembelianModel {
	
	private $table = 'tb_pembelian';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPembelian()
	{
		$this->db->query("SELECT tb_pembelian.*, tb_barang.Nama_Barang as nama_barang FROM " . $this->table . " JOIN tb_barang ON tb_barang.Id_Barang = tb_pembelian.Id_barang");
		return $this->db->resultSet();
	}

	public function getPembelianById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE Id_Pembelian=:id_pembelian');
		$this->db->bind('id_pembelian',$id);
		return $this->db->single();
	}

	public function tambahPembelian($data)
	{
		$query = "INSERT INTO tb_pembelian (Tgl_Pembelian, Harga_Beli, Jumlah_Pembelian, Id_barang) VALUES(:tgl_pembelian, :harga_beli, :jumlah_pembelian, :id_barang)";
		$this->db->query($query);
		$this->db->bind('tgl_pembelian', $data['tgl_pembelian']);
		$this->db->bind('harga_beli', $data['harga_beli']);
		$this->db->bind('jumlah_pembelian', $data['jumlah_pembelian']);
		$this->db->bind('id_barang', $data['id_barang']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariPembelian()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT tb_pembelian.*, tb_barang.Nama_Barang as nama_barang FROM " . $this->table . " JOIN tb_barang ON tb_barang.Id_Barang = tb_pembelian.Id_barang WHERE nama_barang LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}