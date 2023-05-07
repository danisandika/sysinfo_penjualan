<?php

class UserModel {
	
	private $table = 'tb_pengguna';
	private $table1 = 'tb_pelanggan';
	private $table2 = 'tb_supplier';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllPengguna()
	{
		$this->db->query("SELECT tb_pengguna.*, tb_hakakses.Nama_Akses as nama_akses FROM " . $this->table . " JOIN tb_hakakses ON tb_hakakses.Id_Akses = tb_pengguna.Id_Akses");
		return $this->db->resultSet();
	}

	public function getAllPelanggan()
	{
		$this->db->query("SELECT tb_pelanggan.*, tb_barang.Nama_Barang as nama_barang FROM " . $this->table1 . " JOIN tb_barang ON tb_barang.Id_Barang = tb_pelanggan.Id_Barang");
		return $this->db->resultSet();
	}

	public function getAllSupplier()
	{
		$this->db->query("SELECT * FROM " . $this->table2 );
		return $this->db->resultSet();
	}
	
}