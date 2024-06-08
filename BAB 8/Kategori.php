<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/Admin.css">
    <title>Dashboard Admin</title>
    <style>
        .btn-action {
            display: inline-block;
            margin-right: 10px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxs-window-alt"></i>
            <span class="logo_name">TechByte</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="Admin.php" class="active">
                    <i class=" bx bxs-dashboard"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="Kategori.php">
                    <i class="bx bxs-news"></i>
                    <span class="links_name">Berita</span>
                </a>
            </li>
            <li>
                <a href="hire.php">
                    <i class="bx bx-news"></i>
                    <span class="links_name">Hire</span>
                </a>
            </li>
            <li>
                <a href="Logout.php"> <!-- Logout link -->
                    <i class="bx bx-log-out-circle"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <h1 id="text">
                    <?php
                    echo $_SESSION['username'];
                    ?>
                </h1>
            </div>
        </nav>
        <div class="home-content">
            <h3>Kategori Berita</h3>
            <button type="button" class="btn btn-primary" onclick="location.href='kategori-entry.php'">
                Menambahkan Data
            </button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 10%">Foto</th>
                        <th scope="col" style="width: 10%">Kategori</th>
                        <th scope="col" style="width: 10%">Judul</th>
                        <th scope="col" style="width: 20%">Isi</th>
                        <th scope="col" style="width: 10%">Tanggal</th>
                        <th scope="col" style="width: 15%">Langkah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = "SELECT * FROM tb_berita";
                    $result = mysqli_query($koneksi, $sql);
                    if (mysqli_num_rows($result) == 0) {
                        echo "
                                <tr>
                                    <td colspan='7' align='center'>
                                        Data Kosong
                                    </td>
                                </tr>";
                    } else {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "
                            <tr>
                                <td>
                                    <img src='Assets/$data[foto]' width='200px'>
                                </td>
                                <td>$data[kategori]</td>
                                <td>$data[judul]</td>
                                <td>$data[isi]</td>
                                <td>$data[Tanggal]</td>
                                <td>
                                    <a class='btn btn-primary btn-action' href='kategori-edit.php?id=$data[id]'>
                                        Edit
                                    </a>
                                    <a class='btn btn-primary btn-action' href='kategori-hapus.php?id=$data[id]'>
                                        Hapus
                                    </a>
                                </td>
                            </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>
</html>
