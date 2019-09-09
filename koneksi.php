<?php

//konfig koneksi
try {
  $dbh=new PDO("mysql:host=localhost;dbname=db", "root", "");
  //set error response
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
//CATCH JIKA ADA ERROR
catch (pdoexception $e) {
  print "koneksi bermasalah: " . $e->getmessage(). "<br>";
  die();
}
?>
