<?php
require "koneksi.php";
$no=$_GET['no'];
$data = mysqli_query($koneksi,"SELECT * FROM dbpost WHERE no=$no");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
while ($d = mysqli_fetch_array($data)) {
?>
<table>
<form action="post.php" method="GET">
    <tr>
      <td><label for="no">No</label></td>
      <td> <input type="hidden" name="no" value="<?php echo $d['no']; ?>"> </td>
    </tr>
    <tr>
        <td><label for="nama">Nama</label></td>
        <td><input type="text" name="nama" id="nama" value="<?php echo $d['nama']; ?>"></td>
    </tr>
    <tr>
        <td><label for="">Tanggal</label></td>
        <td><input type="text" name="tanggal" id="tanggal"value="<?php echo $d['tanggal']; ?>"></td>
    </tr>
    <tr>
        <td><label for="fakultas">Fakultas</label></td>
        <td><input type="text" name="fakultas" id="fakultas"value="<?php echo $d['fakultas']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Update"></td>
        <td><input type="button" value="reset"></td>
    </tr>
</form>
</table>
<?php } ?>
</body>
