<?php 
session_start();
include '../connect.php';
 
$nama = strtolower($_POST['nama']);
$pswd = $_POST['pass'];
$method = $_POST['method'];

$stmt = $koneksi->prepare("SELECT * FROM data_user WHERE nama=? AND password=? AND (email=? OR telp=?)");
$stmt->bind_param("ssss", $nama, $pswd, $method, $method);
$stmt->execute();
$hasil = $stmt->get_result();
$cek = $hasil->num_rows;

// $query = mysqli_query($koneksi, "SELECT * FROM data_user WHERE nama='$nama' AND password='$pswd' AND (email='$method' || telp='$method')");
// $cek = mysqli_num_rows($query);

if ($cek > 0 ) {
    $data = $hasil->fetch_assoc();

    if ($data['level'] =="admin") {
        $_SESSION['nama'] = $nama;
        $_SESSION['level'] = "admin";
        header("location:../admin/admin.php");
        exit();
    } else if ($data['level'] =="user") {
        $_SESSION['nama'] = $nama;
        $_SESSION['level'] = $data['id'];
        header("location:../user/index.php");
        exit();
    } else {
        echo "Maaf Anda Bukan Admin, Mohon Kembali";
        header("location:../index.php?pesan=error");
        exit();
    }
} else {
    header("location:signin.php?pesan=error");
    exit();
}
?>