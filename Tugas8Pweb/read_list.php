<?php
 
include("config.php");
 
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $sql = "SELECT * FROM calon_karyawan";
    $query = mysqli_query($db, $sql);
 
    while ($karyawan = mysqli_fetch_array($query)) {
        echo json_encode([
            "id" => $karyawan["id"],
            "nama" => $karyawan["nama"],
            "jenis_kelamin" => $karyawan["jenis_kelamin"],
            "agama" => $karyawan["agama"],
            "sekolah_asal" => $karyawan["domisili_asal"],
            "alamat" => $karyawan["alamat"],
            "nama" => $karyawan["nama"],
           
        ]);
        echo "\n";
    }
}else{
    die("Method not allowed");
}
 
?>