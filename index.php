<?php
//echo "Muhammad Surya Ibrahim";
//print_r("Muhammad Surya Ibrahim");
//$nama = "Muhammad Surya Ibrahim";
// function salam($nama) {
//     return "Halo $nama" ;
// }
// $datakelas = [
//     [
//         "Foto" => "fubuki1.jpg",
//         "Nama" => "Muhammad",
//         "Umur" => 16,
//         "Alamat" => "Kudus"
//     ],
//     [
//         "Foto" => "fubuki2.png",
//         "Nama" => "Surya",
//         "Umur" => 16,
//         "Alamat" => "Demak"
//     ],
//     [
//         "Foto" => "fubuki3.png",
//         "Nama" => "Ibrahim",
//         "Umur" => 16,
//         "Alamat" => "Pati"
//     ],
// ];
require "function.php";
$data = query("SELECT * FROM dt_siswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php include "header.php"; ?>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center">Data Siswa</h3>
                <div class="card">
                    <div class="card-body">
                        <a type="button" class="btn btn-primary float-end" href="tambah.php">Tambah Data Beru</a>
                        <br><br>
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr align="center">
                                    <th scope="col">Id</th>
                                    <th scope="col">Nis</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $siswa) {
                                ?>
                                    <tr align="center">
                                        <td><?= $siswa["intid"]; ?></td>
                                        <td><?= $siswa["intnis"]; ?></td>
                                        <td><?= $siswa["vcnama"]; ?></td>
                                        <td><?= $siswa["vcalamat"]; ?></td>
                                        <td><?= $siswa["vctanggal"]; ?></td>
                                        <td><img style="height: 50px" src=<?= $siswa["vcfoto"]; ?> alt="vcfoto"></td>
                                        <td>    
                                            <a type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $siswa ['intid'];?>" style href="">Detail</a>
                                            <a type="button" class="btn btn-warning" href="ubah.php?id=<?= $siswa ['intid']?>" onclick="return confrim('Yakin Ubah Data ?')">Ubah<a>
                                            <a type="button" class="btn btn-danger" href="hapus.php?id=<?= $siswa ['intid']?>" onclick="return confrim('Yakin Hapus Data ?')">Hapus</a>
                                        </td>                                        
                                    </tr>
                                    <div class="modal fade" id="exampleModal<?= $siswa ['intid'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="" class="form-label">Nis</label>
                                                    <input class="form-control" list="" id="intnis" name="intnis" value="<?= $siswa ['intnis'];?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Nama</label>
                                                    <input class="form-control" list="" id="vcnama" name="vcnama" value="<?= $siswa ['vcnama'];?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Alamat</label>
                                                    <input class="form-control" list="" id="vcalamat" name="vcalamat" value="<?= $siswa ['vcalamat'];?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="form-label">Tanggal</label>
                                                    <input class="form-control" list="" id="vctanggal" name="vctanggal" value="<?= $siswa ['vctanggal'];?>" readonly>
                                                </div>
                                                <br>
                                                <div align="center" class="form-group">
                                                    <label for="" class="form-label">Foto</label> <br>
                                                    <img style="height: 300px" src="<?= $siswa["vcfoto"]; ?>" alt="<?= $siswa["vcfoto"]; ?>">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a type="button" class="btn btn-warning" href="ubah.php?id=<?= $siswa ['intid']?>">Ubah</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>

</html>