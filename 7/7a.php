<?php
$servername = "localhost";
$database = "empat";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
?>
<style>

</style>
<table border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>work</th> <!-- hoby -->
            <th>salary</th> <!-- category -->
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT nama.name, work.name, kategori.salary FROM (nama LEFT JOIN work ON nama.id_work = work.id) LEFT JOIN kategori ON work.id_salary = kategori.id";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>