<?php 
//id
if($id === '') header("Location: index.php");
$data = $db->getPegawaiById($id);
if(isset($_POST['id']) & !empty($_POST['id'])) {
	if($db->delete($_POST['id'])) {
		header("Location: index.php");
	} else {
		echo "gagal hapus data";
	}
}
?>
<a href="index.php"><button>&laquo;</button></a>
<p>Anda yakin akan menghapus data ini dibawah ?</p>
<table>
	<tr>
		<td>ID</td>
		<td><?=$data['id']?></td>
	</tr>
	<tr>
		<td>NAMA</td>
		<td><?=$data['nama']?></td>
	</tr>
	<tr>
		<td>JK</td>
		<td><?=$data['jk'] === 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
	</tr>
	<tr>
		<td>ALAMAT</td>
		<td><?=$data['alamat']?></td>
	</tr>
	<tr>
		<td>PILIH</td>
		<td><?=$data['pilih']?></td>
	</tr>
	<tr>
		<td>Telp</td>
		<td><?=$data['telp']?></td>
	</tr>
</table>
<form method="post" action="?act=delete&id=<?=$id?>">
	<input type="hidden" name="id" value="<?=$id?>">
	<button onClick="return confirm('Hapus data?')">Hapus</button>
</form>