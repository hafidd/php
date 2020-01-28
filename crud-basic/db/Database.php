<?php
class Database {
	private $koneksi;

	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $db_name = 'hfd_crud';

	function __construct() {
		$this->konek();
	}

	//konek db
	private function konek() {
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
		if(mysqli_connect_error()) {
			die("Koneksi database gagal");
		}
	}

	/*
	*QUERY
	*/

	//get data
	public function getPegawai() {
		$sql = "SELECT * FROM pegawai";
		$res = mysqli_query($this->koneksi, $sql);
		return $res;
	}

	//get detail
	public function getPegawaiById($id) {
		$sql = "SELECT * FROM pegawai WHERE id={$id}";
		$res = mysqli_query($this->koneksi, $sql);
		return $res->fetch_assoc();
	}

	//insert
	public function create($nama, $jk, $alamat, $pilih, $telp) {
		$sql = "INSERT INTO pegawai(nama,jk,alamat,pilih,telp) VALUES ('$nama', '$jk', '$alamat', '$pilih', '$telp')";
		$res = mysqli_query($this->koneksi, $sql);
		if($res) return true;
		return false;
	}

	//update
	public function update($id, $nama, $jk, $alamat, $pilih, $telp) {
		$sql = "UPDATE pegawai SET nama='$nama', jk='$jk', alamat='$alamat', pilih='$pilih', telp='$telp' WHERE id='$id'";
		$res = mysqli_query($this->koneksi, $sql);
		if($res) return true;
		return false;
	}

	//hapus
	public function delete($id) {
		$sql = "DELETE FROM pegawai where id='$id'";
		$res = mysqli_query($this->koneksi, $sql);
		if($res) return true;
		return false;
	}
}
