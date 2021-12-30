<?php
 
include("config.php");
 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = str_replace("'", "\'", $_POST['id']);
    $nama = str_replace("'", "\'", $_POST['nama']);
    $jenis_kelamin = str_replace("'", "\'", $_POST['jenis_kelamin']);
    $agama = str_replace("'", "\'", $_POST['agama']);
    $domisili_asal = str_replace("'", "\'", $_POST['domisili_asal']);
    $alamat = str_replace("'", "\'", $_POST['alamat']);
 
    $sql = "UPDATE calon_siswa
           SET nama='$nama', jenis_kelamin='$jenis_kelamin', agama='$agama', domisili_asal='$domisili_asal', alamat='$alamat'
           WHERE id=$id";
    $query = mysqli_query($db, $sql);
   
    if ($query) {
        die(json_encode([
            "error" => 0,
            "status" => "OK"
        ]));
    } else {
        die(json_encode([
            "error" => 500,
            "status" => "Internal Server Error"
        ]));
    }
}else{
    die("Method not allowed");
}