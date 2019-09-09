<?php
require 'koneksi.php';
//SELECT ALL
$result2=$dbh->query('SELECT * FROM dbpost');
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
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Fakultas</th>
            <th>action</th>
        </tr>
<?php foreach ($result2 as $r) { ?>  
        <tr>
            <td><?php echo $r['no']; ?></td>
            <td><?php echo $r['nama']; ?></td>
            <td><?php echo $r['tanggal']; ?></td>
            <td><?php echo $r['fakultas']; ?></td>
            <td>
                <a href="edit.php?no<?php echo $r['no'] ?>">edit</a> |
                <a href="delete.php?no<?php echo $r['no'] ?>">hapus</a>
            </td>
        </tr>
<?php } ?>
        
    </table>
</body>
</html>
