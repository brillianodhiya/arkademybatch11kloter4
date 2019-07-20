<?php
$servername = "localhost";
$database = "empat";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$nama = $_POST['nama'];
$work = $_POST['work'];
$kategori = $_POST['kategori'];
$sql = "INSERT INTO nama (name, id_work, id_salary) VALUES ('".$nama."','".$work."','".$kategori."')";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Data $nama telah ditambahkan')</script>";
    echo "<script>document.location='7c.php'</script>";
}
?>