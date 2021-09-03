<h1>DELET</h1>
<a href="latihan1.php"><span><= Kembali</span></a>
<br></br>
<?php 
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    $id     = $_GET['id'];

    $data = mysqli_query($con,"DELETE FROM tbl_mahasiswa WHERE id='$id'");
        echo "<script>alert('Data Berhasil Dihapus')('location:latihan1.php');</script>";
?>