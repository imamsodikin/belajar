<?php
require 'koneksi.php';
//bind param
// die(print_r($_POST));
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$fakultas = $_POST['fakultas'];
// //SET QUERY
public function insert()
{
  $query="INSERT INTO dbpost(nama,tanggal,fakultas) VALUES('$nama', '$tanggal', '$fakultas')";
  $result=$dbh->query($query);

  if ($result) {
    echo ("
    <script LANGUAGE='JavaScript'>
    window.alert('berhasil tersimpan');
    window.location.href='show.php';
    </script>
    ");
  }
}
    // $stmt=$dbh->prepare("INSERT INTO dbpost(nama, tanggal, fakultas) VALUES(:nama, :tanggal, :fakultas)");
    // $stmt->exec();
    // $stmt->bindParam(':nama', $nama);
    // $stmt->bindParam(':tanggal', $tanggal);
    // $stmt->bindParam(':fakultas', $fakultas);

//  tampilkan hasil post

// //GET DATA EDIT
//   $nama = $_GET['nama'];
//   $tanggal = $_GET['tanggal'];
//   $fakultas = $_GET['fakultas'];
// //SET QUERY edit
// public function edit()
// {
//   $query="UPDATE FROM dbpost SET $nama['nama'], $tanggal['tanggal'], $fakultas['fakultas'] WHERE $no['no']"
//   $result=$dbh->query($query);
// }

?>
