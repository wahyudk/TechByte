<?php 
include 'Koneksi.php';

function upload() {
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'kategori-entry.php';
            </script>
        ";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = 'kategori-entry.php';
            </script>
        ";

        return false;
    }

    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'Assets/' . $namaFileBaru);
    return $namaFileBaru;
}

if(isset($_POST['simpan'])) {
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];
    $foto = upload();

    if(!$foto) {
        return false;
    }

    $sql = "INSERT INTO tb_berita VALUES(NULL, '$foto', '$kategori', '$judul', '$isi', '$tanggal')";

    if(empty($kategori) || empty($judul) || empty($isi) || empty($tanggal)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'kategori-entry.php';
            </script>
        ";
    } elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berita Berhasil Ditambahkan');
                window.location = 'kategori.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'kategori-entry.php'
            </script>
        ";
    }
} elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = $_POST['tanggal'];

    // Inisialisasi variabel $fotoLama dengan string kosong
    $fotoLama = '';

    // Cek apakah ada file yang diunggah sebelumnya
    if(isset($_POST['fotoLama'])) {
        $fotoLama = $_POST['fotoLama'];
    }

    // cek apakah user pilih gambar atau tidak
    if($_FILES['foto']['error'] === 4) {
        $foto = $fotoLama;
    } else {
        // Hapus file gambar lama jika ada
        if(!empty($fotoLama)) {
            unlink('Assets/' . $fotoLama);
        }
        // Upload foto baru
        $foto = upload();
    }

    $sql = "UPDATE tb_berita SET 
    foto = '$foto',
    kategori = '$kategori',
    judul = '$judul',
    isi = '$isi',
    tanggal = '$tanggal'
    WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berita Berhasil Diubah');
                window.location = 'kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'kategori-edit.php';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    // hapus gambar
    $sql = "SELECT * FROM tb_berita WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $foto = $row['foto'];
    unlink('Assets/' . $foto);

    $sql = "DELETE FROM tb_berita WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berita Berhasil Dihapus');
                window.location = 'kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Berita Gagal Dihapus');
                window.location = 'kategori.php';
            </script>
        ";
    }
} else {
    header('location: kategori.php');
}
?>
