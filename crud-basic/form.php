<?php
//cek&get data
if($act === 'update' & $id === '')
	header("Location: index.php");
elseif($act === 'update')
	$data = $db->getPegawaiById($id);
//create
if(isset($_POST) & !empty($_POST)) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$pilih = $_POST['pilih'];
	$telp = $_POST['telp'];
	if($act === 'create') {
		$proses = $db->create($nama, $jk, $alamat, $pilih, $telp);
	} else {
		$proses = $db->update($id, $nama, $jk, $alamat, $pilih, $telp);
	}
	if($proses) {
		echo "sukses";
		//reload data
		if($act === 'update')
			$data = $db->getPegawaiById($id);
	} else {
		echo "gagal";
	}
}
?>
<a href="index.php"><button>&laquo;</button></a>
<h4><?=$act==='create'? 'TAMBAH DATA' : 'UBAH DATA' ?></h4>
<form method="post" action="?act=<?=$act?>&id=<?=$id?>">
	<input type="hidden" name="id" value="<?=$id?>">
	<div>
		<label>Nama</label>
		<input type="text" name="nama" value="<?=isset($data['nama'])?$data['nama']:''?>" required="required">
	</div>
	<div>
		<label>JK</label>
		<input type="radio" name="jk" value="L" <?=(isset($data['jk']) && $data['jk'] === 'L') ? "checked" : ''?> required="required"> L
		<input type="radio" name="jk" value="P" <?=(isset($data['jk']) && $data['jk'] === 'P') ? "checked" : ''?> required="required"> P
	</div>
	<div>
		<label>Alamat</label>
		<textarea name="alamat" cols="15"><?=isset($data['alamat'])?$data['alamat']:''?></textarea>
	</div>
	<div>
		<label>Pilih</label>
		<select name="pilih" required="required">
			<option value="">- PILIH -</option>
			<option value="pilihan1" <?=(isset($data['pilih']) && $data['pilih'] === 'pilihan1') ? 'selected="selected"' : ''?> >pilihan 1</option>
			<option value="pilihan2" <?=(isset($data['pilih']) && $data['pilih'] === 'pilihan2') ? 'selected="selected"' : ''?> >pilihan 2</option>
			<option value="pilihan3" <?=(isset($data['pilih']) && $data['pilih'] === 'pilihan3') ? 'selected="selected"' : ''?> >pilihan 3</option>
			<option value="pilihan4" <?=(isset($data['pilih']) && $data['pilih'] === 'pilihan4') ? 'selected="selected"' : ''?> >pilihan 4</option>
		</select>
	</div>
	<div>
		<label>No. Telp</label>
		<input type="text" name="telp" value="<?=isset($data['telp'])?$data['telp']:''?>" required="required">
	</div>
	<div>
		<button>SIMPAN</button>
	</div>
</form>