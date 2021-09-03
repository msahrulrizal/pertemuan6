<?php
$id = isset($_GET["id"])?$_GET["id"]:"";
require("csrf.php");
?>
<!DOCTYPE html>
<html>
<body>
<table width="100%" height="100%" border="1">
    <tr height="5%">
        <td align="center">
            <a href="index.php?id=<?php echo base64_encode(1); ?>">Mahasiswa</a>
            <a href="index.php?id=<?php echo base64_encode(2); ?>">Dosen</a>
            <a href="index.php?id=<?php echo base64_encode(3); ?>">Matakuliah</a>

        </td>
    </tr>
    <tr height="95%">
        <td valign="top" align="center">
            <?php
                $id_menu =base64_decode($id);
                if($id_menu==0)
                {
                    include('halaman.php');
                }
                elseif($id_menu==1)
                {
                    include('latihan1.php');
                }
                elseif($id_menu==2)
                {
                    include('latihan5.php');
                }
                elseif($id_menu==3)
                {
                    include('latihan9.php');
                }
                elseif($id_menu==4)
                {
                    include('latihan2.php');
                }
            ?>
        </td>
    </tr>
</table>
</body>
</html>