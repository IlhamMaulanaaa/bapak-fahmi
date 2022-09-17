<?php
require "function.php";
$conn = mysqli_connect("localhost", "root", "", "db_sekolah2");
if (isset($_POST["submit"])) {    
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
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
                <h3 align="center">Tambah Data Baru</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post">                                                      
                            <div class="form-group">
                                <label for="" class="form-label">Nis</label>
                                <input class="form-control" list="" id="intnis" name="intnis" placeholder="">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama</label>
                                <input class="form-control" list="" id="vcnama" name="vcnama" placeholder="">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" list="" id="vcalamat" name="vcalamat" placeholder="">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Tanggal</label>
                                <input class="form-control" type="date" list="" id="vctanggal" name="vctanggal" placeholder="">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Foto</label>
                                <input type= "file" class="form-control" list="" id="vcfoto" name="vcfoto" placeholder="">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"></script>
</body>

</html>

</html>