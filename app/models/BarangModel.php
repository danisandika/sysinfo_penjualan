<?php

class BarangModel {
	
	private $table = 'tb_barang';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllBarang()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getBarangById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_barang=:id');
		$this->db->bind('id',$id);
		return $this->db->single();
	}

	public function tambahBarang($data)
	{
		$query = "INSERT INTO tb_barang (Nama_Barang, Keterangan, Satuan, Qty, Id_Pengguna) VALUES(:nama_barang, :keterangan, :satuan, :qty, :id_pengguna)";
		$this->db->query($query);
		$this->db->bind('nama_barang',$data['nama_barang']);
		$this->db->bind('keterangan',$data['keterangan']);
		$this->db->bind('satuan',$data['satuan']);
		$this->db->bind('qty',$data['qty']);
		$this->db->bind('id_pengguna',$data['id_pengguna']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataBarang($data)
	{
		$query = "UPDATE tb_barang SET Nama_Barang=:nama_barang, Keterangan=:keterangan, Satuan=:satuan, Qty=:qty, Id_Pengguna=:id_pengguna WHERE Id_Barang=:id_barang";
		$this->db->query($query);
		$this->db->bind('id_barang',$data['id_barang']);
		$this->db->bind('nama_barang',$data['nama_barang']);
		$this->db->bind('keterangan',$data['keterangan']);
		$this->db->bind('satuan',$data['satuan']);
		$this->db->bind('qty',$data['qty']);
		$this->db->bind('id_pengguna',$data['id_pengguna']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteBarang($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE Id_Barang=:id_barang');
		$this->db->bind('id_barang',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariBarang()
	{
		$key = $_POST['key'];
		$this->db->query("SELECT * FROM " . $this->table . " WHERE nama_barang LIKE :key");
		$this->db->bind('key',"%$key%");
		return $this->db->resultSet();
	}


	public function getLabaRugi()
	{
		$this->db->query("SELECT 
					SUM(jumlah_pembelian * harga_beli) AS pembelian,
					SUM(jumlah_penjualan * harga_jual) AS penjualan,
					SUM(jumlah_penjualan * harga_jual) - SUM(jumlah_pembelian * harga_beli) AS laba_rugi,
					CASE 
					WHEN SUM(jumlah_penjualan * harga_jual) - SUM(jumlah_pembelian * harga_beli) >= 0 THEN 'Laba'
					ELSE 'Rugi'
					END AS keterangan
				FROM tb_penjualan,tb_pembelian");
		return $this->db->resultSet();
	}
}