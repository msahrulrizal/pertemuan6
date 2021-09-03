<h1>Input Dosen</h1>

<?php

// Koneksi ke Database
include 'koneksi.php';
require("csrf.php");
$db = new Database();
$con=$db->Connect();

// Perintah insert data ke Database
if(isset($_POST['proses']))
{
    if(validation()==true)
        {
            $query=mysqli_query($con,"insert into dosen values(
            '".$_POST['kode_dosen']."',
            '".$_POST['nama']."'
            )");
            echo "<script>alert('Data Berhasil Diupdate')('location:latihan5.php');</script>";
        }else{
            echo "<script>alert('Csrf Token tidak sesuai')('location:latihan5.php');</script>";
        }  

//header('location:latihan5.php');
}
?>
<form action="" method="POST">
<input type="hidden" name="csrf_name" value="<?php echo createToken();?>"/>
Kode Dosen <br>
<input type="text" name="kode_dosen"><br>
Nama <br>
<input type="text" name="nama"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='button' onclick=location.href='latihan5.php' value='Batal' />
</form> 