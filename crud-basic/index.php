<?php
require_once ("db/Database.php");
$act = isset($_GET['act']) ? $_GET['act'] : ''; 
$id = isset($_GET['id']) ? $_GET['id'] : '';
$db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>
	<!-- css -->
	<!-- js -->	
</head>
<body>
	<h1>PHP CRUD APP</h1>
	<hr>
	<div>
		<?php
		switch($act) {
			case '':
			include 'tabel.php';
			break;

			case 'create':
			include 'form.php';
			break;

			case 'update':
			include 'form.php';
			break;
			
			case 'read':
			include 'detail.php';
			break;
			
			case 'delete':
			include 'hapus.php';
			break;

			default:
			echo "Halaman Tidak ditemukan";
			break;
		}
		?>
	</div>
</body>
</html>