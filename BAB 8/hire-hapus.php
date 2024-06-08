<?php
    session_start();
    if ($_SESSION['username'] == null) {
        header('location:../login.php');
    }
    include 'koneksi.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM tb_hire WHERE id = $id";

    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location = 'hire.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                window.location = 'hire.php';
            </script>
        ";
    }
    ?>
