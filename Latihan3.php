<?php
    include 'koneksi.php';
    require("csrf.php");
    $db     = new Database();
    $con    = $db->Connect();
    $id     = $_GET['id'];
    $data   = mysqli_query($con,"SELECT * FROM tbl_mahasiswa WHERE id='$id'");
    $d = mysqli_fetch_array($data);   

    if(isset($_POST['proses']))
    {
        if(validation()==true)
        {
            mysqli_query($con, "UPDATE tbl_mahasiswa  SET nama = '$_POST[nama]',npm = '$_POST[npm]'
            WHERE id = '$_GET[id]'");
            echo "<script>alert('Data Berhasil Diupdate')('location:latihan1.php');</script>";
        }else{
            echo "<script>alert('Csrf Token tidak sesuai')('location:latihan1.php');</script>";
        }    
    }
?>

<h1>Tambah Mahasiswa</h2>
<a href="latihan1.php"><span><= Kembali</span></a>
<br></br>
<form action="" method="POST">
    <input type="hidden" name="csrf_name" value="<?php echo createToken();?>"/>
    <input type="text" name="nama" value="<?php echo $d['nama'];?>">
    <input type="text" name="npm" value="<?php echo $d['npm'];?>">
    <input type="submit" name="proses" value="Update">
</form>