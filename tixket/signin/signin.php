<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tixket | Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "error"){
			echo '<script>alert("Usernam Atau Password Salah !!!");</script>';
		} elseif ($pesan == "belum_login") {
			echo '<script>alert("Harap Login Terlebih Dahulu !!!");</script>';
		} elseif ($pesan == "logout") {
			echo '<script>alert("Berhasil Log Out");</script>';
		} elseif ($pesan == "regist") {
			echo '<script>alert("Berhasil Registrasi");</script>';
		}
	}
	?>
<body>
<center>
    <div style="width: 400px;">
        <br>
        <h1>Tixket</h1>
        <h3>Silahkan masuk ke akun anda di sini</h3><br><br>
      <form action="verif.php" method="post">
        <table>
            <tbody>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Email/Nomor Telepon Aktif</td>
                <td><input type="text" name="method" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input class="btn btn-outline-primary" type="submit" value="Masuk!"></td>
            </tr>
            </tbody>
        </table>
      </form>
      <br>
      <h6>Belum punya akun? Silahkan <a href="../signup/signup.php">Daftar</a></h6>
    </div>
</center>


</body>
</html>