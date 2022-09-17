<?php

require "function.php";

//ambil data dari url
$id = $_GET["id"];

//query
$ubah = query("SELECT * FROM dt_siswa WHERE intid = $id")[0];


//cek tombol submit
if(isset($_POST["submit"])){

    //cek data diubah atau tidak
    if(edit($_POST) > 0){
        echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
    </script>";
    }

}
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
                            <input type="hidden" name="intid" value="<?= $ubah["intid"]; ?>">                         
                            <div class="form-group">
                                <label for="nis">Nis : </label>
                			    <input type="number" name="intnis" id="intnis" required value="<?= $ubah["intnis"]; ?>" >
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="nama">Nama : </label>
                			    <input type="text" name="vcnama" id="vcnama" value="<?= $ubah["vcnama"]; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="alamat">Alamat : </label>
					            <input type="text" name="vcalamat" id="vcalamat" value="<?= $ubah["vcalamat"]; ?>">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="foto">Foto : </label>
                		        <input type="file" name="vcfoto" id="vcfoto" value="<?= $ubah["vcfoto"]; ?>">
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