<h1>Daftar Dosen</h1>
<table border="1 px">
<tr>
<th> Kode Dosen </th>
<th> Nama </th>
<th> Aksi </th>
</tr>

<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Mengambil data dari Database
$query=mysqli_query($con,"select * from tbl_dosen");
while($data=mysqli_fetch_array($query)) {

// Menampilkan data dari Database	
echo "<tr>";
echo "<th>"; echo $data['kode_dosen']; echo "</th>";
echo "<th>"; echo $data['nama']; echo "</th>";
echo "<th>"; echo "<a href='latihan7.php?kode_dosen=$data[kode_dosen]'>Ubah</a> | <a href='latihan8.php?kode_dosen=$data[kode_dosen]'>Hapus</a>"; echo "</th>";
echo "</tr>";
}
?>

</table>
<br>
<input type='button' onclick=location.href='latihan6.php' value='Tambah Data' />




