<?php
$pegawai = $db->getPegawai();
?>
<a href="?act=create"><button>+</button></a>
<table border="1">
	<thead>
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>Nama</th>
			<th>JK</th>
			<th>Telp</th>
			<th> </th>
		</tr>
	</thead>
	<tbody>		
		<?php 
		$no = 1; 
		while($data = mysqli_fetch_assoc($pegawai)):?>
			<tr>
				<td><?=$no++?></td>
				<td><?=$data['id']?></td>
				<td><a href="?act=read&id=<?=$data['id']?>"><?=$data['nama']?></a></td>
				<td><?=$data['jk']?></td>
				<td><?=$data['telp']?></td>
				<td>
					<a href="?act=update&id=<?=$data['id']?>"><button>Ubah</button></a>
					<a href="?act=delete&id=<?=$data['id']?>"><button>Hapus</button></a>
				</td>
			</tr>			
		<?php endwhile; ?>
	</tbody>
</table>