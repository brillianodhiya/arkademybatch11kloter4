<?php
$servername = "localhost";
$database = "empat";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

$nama = $_POST['nama'];
$work = $_POST['work'];
$kategori = $_POST['kategori'];
$id = $_POST['id'];
$sql = "UPDATE nama SET name = '".$nama."', id_work = '".$work."' , id_salary='".$kategori."' WHERE id = '".$id."' ";
if(mysqli_query($conn,$sql)){
    echo "<script>alert('Data $nama telah diedit')</script>";
    echo "<script>document.location='7c.php'</script>";
}
?>