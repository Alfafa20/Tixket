<?php
    include('../connect.php');
    $nama = strtolower($_POST['nama']);
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $pswd = $_POST['pass'];

    $query = mysqli_query($koneksi, "SELECT * FROM data_user WHERE email='$email' AND telp='$telp'");
    $cek = mysqli_num_rows($query);
    $hasil = mysqli_query($koneksi, "SELECT MAX(id) AS max_id FROM data_user");
    $row = mysqli_fetch_assoc($hasil);
    $cekid = $row['max_id']
    $id = $cekid + 1;

    if ($cek > 0) {
        header("location:signup.php?pesan=error");
    }else {
        mysqli_query($koneksi, "INSERT INTO data_user(`id`, `nama`, `email`, `telp`, `password`, `level`) VALUES ('$id', '$nama', '$email', '$telp', '$pswd', 'user')");
        header("location:../signin/signin.php?pesan=regist");
    }
?>