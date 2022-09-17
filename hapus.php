<?php
require "function.php";
    // $conn = mysqli_connect("localhost", "root", "", "db_sekolah");

    $id =  $_GET['id'];

    // $query = "DELETE FROM dt_siswa WHERE intid = $id";
    // mysqli_query($conn, $query);
    if (hapus($id) > 0) {
        echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal dihapus');
                document.location.href = 'index.php';
            </script>
        ";
    }

?>