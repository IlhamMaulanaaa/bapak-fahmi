<?php
$conn = mysqli_connect("localhost", "root", "", "db_sekolah2");
function query($query) {
    global $conn;    
    $result = mysqli_query($conn, $query);    
    if ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }
            return $rows;
    }
function tambah($data) {
    global $conn;
    $nis = $data["intnis"];
    $nama = $data["vcnama"];
    $alamat = $data["vcalamat"];
    $tanggal = date('Y-m-d',strtotime($data["vctanggal"]))
    $foto = $data["vcfoto"];

    $query = "INSERT INTO dt_siswa
    VALUES ( '','$nis', '$nama', '$alamat','$tanggal', '$foto')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM dt_siswa WHERE intid = $id");
    return mysqli_affected_rows($conn);
    }

function edit($data){
    global $conn;

    $id = $data["intid"];
    $nis = htmlspecialchars($data["intnis"]);
    $nama = htmlspecialchars($data["vcnama"]);
    $alamat = htmlspecialchars($data["vcalamat"]);
    $foto = htmlspecialchars($data["vcfoto"]);
    
    $query = "UPDATE dt_siswa 
            SET intnis = '$nis',
                vcnama = '$nama',
                vcalamat = '$alamat',
                vcfoto = '$foto'
            WHERE intid = $id 
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
    
?>

