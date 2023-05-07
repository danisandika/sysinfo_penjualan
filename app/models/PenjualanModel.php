<?php

class PenjualanModel {
	
	private $table = 'tb_penjualan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPenjualan()
	{
		$this->db->query("SELECT tb_penjualan.*, tb_barang.Nama_Barang as nama_barang FROM " . $this->table . " JOIN tb_barang ON tb_barang.Id_Barang = tb_penjualan.Id_barang");
		return $this->db->resultSet();
	}

	public function getpenjualanById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE Id_penjualan=:id_penjualan');
		$this->db->bind('id_penjualan',$id);
		return $this->db->single();
	}

	public function tambahpenjualan($data)
	{
		$query = "INSERT INTO tb_penjualan (Tgl_penjualan, Harga_Jual, Jumlah_penjualan, Id_barang) VALUES(:tgl_penjualan, :harga_jual, :jumlah_penjualan, :id_barang)";
		$this->db->query($query);
		$this->db->bind('tgl_penjualan', $data['tgl_penjualan']);
		$this->db->bind('harga_jual', $data['harga_jual']);
		$this->db->bind('jumlah_penjualan', $data['jumlah_penjualan']);
		$this->db->bind('id_barang', $data['id_barang']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function caripenjualan()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT tb_penjualan.*, tb_barang.Nama_Barang as nama_barang FROM " . $this->table . " JOIN tb_barang ON tb_barang.Id_Barang = tb_penjualan.Id_barang WHERE nama_barang LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}
}