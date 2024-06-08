<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
    $butuh = $_POST['butuh'];
    $jumlah = $_POST['jumlah'];
    $umur = $_POST['umur'];

    if(empty($butuh) || empty($jumlah) || empty($umur)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'hire-entry.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO tb_hire(butuh, jumlah, umur) VALUES ('$butuh', '$jumlah', '$umur')";
        if(mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location = 'hire.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'hire-entry.php';
                </script>
            ";
        }
    }
} elseif(isset($_POST['Edit'])) {
    $id = $_POST['ID'];
    $butuh = $_POST['butuh'];
    $jumlah = $_POST['jumlah'];
    $umur = $_POST['umur'];
    $sql = "UPDATE tb_hire SET 
            butuh = '$butuh',
            jumlah = '$jumlah',
            umur = '$umur'
            WHERE ID = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'hire.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'hire-edit.php';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id = $_POST['ID'];

    $sql = "DELETE FROM tb_hire WHERE ID = $id";
    if(mysqli_query($koneksi, $sql)) {
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
} else {
    header('location: hire.php');
}
?>
