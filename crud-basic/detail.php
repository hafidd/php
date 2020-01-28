<?php 
//id
if($id === '') header("Location: index.php");
$data = $db->getPegawaiById($id);
?>
<a href="index.php"><button>&laquo;</button></a>
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