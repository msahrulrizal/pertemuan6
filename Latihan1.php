<h1>Daftar Mahasiswa</h2>
<a href="latihan2.php"><span>VIEW</span></a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();

    $query  = mysqli_query($con,"select * from tbl_mahasiswa");
    $res = $query->num_rows;

    if ($res > 0) {
        echo "<table border='1px solid black'>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NPM</th>
                <th>Action</th>
            </tr>";
                $no = 0;
                while($data = mysqli_fetch_array($query)){
                    echo " <tr>
                                <td>".$data["id"]."</td>
                                <td>".$data["nama"]."</td>
                                <td>".$data["npm"]."</td>
                                <td>
                                   <a href='index.php?id=".base64_encode(4)."&ids=".$data["id"]."'>Insert</a>
                                   <a href='latihan3.php?id=".$data["id"]."'>Ubah</a>
                                   <a href='latihan4.php?id=".$data["id"]."'>Hapus</a>
                                </td>
                            </tr>";
                }
        echo "</table>";
    }else{
        echo "0 results";
    }
?>