<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="shortcut icon" href="_controller/img/global.png">
	<link rel="stylesheet" type="text/css" href="head-login/style.css">
</head>
<body><br><br><br><br><br><br><br><br><br>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
		<center>
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="gagal"){
					echo "<div class='alert'><p style='background-color:yellow'>Maaf ada yang salah</p></p></div>";
				}
			}
			?>
		</center>
		<form action="cek_login.php" method="post">
			<label>NIK</label>
			<input type="text" name="nik" class="form_login" placeholder="Masukan NIK anda">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password">

			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
		</form>
	</div>
</body>
</html>