<?php
// Buatlah sebuah query untuk menampilkan nama yang memiliki nilai matakuliah tertinggi pada matakuliah basis data dengan kode matakuliah “MK303”.
$host = "";
$DB = "";
$table = "";
$username = "root";
$password = "";

$connection = mysqli_connect($host,$username,$password,$DB);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$query = "SELECT Mahasiswa.NM_Mhs, MAX(Nilai.Value) AS Nilai FROM Mahasiswa LEFT JOIN Nilai ON Mahasiswa.NIM = Nilai.NIM WHERE Kode_MataKuliah = MK303";

$res = $connection->query($query);
$mahasiswa = $res->fetch_assoc();
