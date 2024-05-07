<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.jpeg" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="Kategori.css">
    <title>Admin</title>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>TechByte ADMIN</h3>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#" class="active">
                        <i class="bx bxs-dashboard"></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="Kategori.php">
                        <i class="bx bxs-news"></i>
                        <span class="links_name">Kategori Berita</span>
                    </a>
                </li>
                <li>
                    <a href="Input.php"
                        <i class="bx bx-news"></i>
                        <span class="links_name">Input Berita</span>
                    </a>
                </li>
                  <li>
                    <a href="#">
                        <i class="bx bx-log-out-circle"></i>
                        <span class="links_name">Log out</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                </div>
            </nav>
            <h3>Kategori Berita</h3>
            <button type="button" class="btn btn-primary" onclick="location.href='categories-entry.php'">
                Menambahkan Data
            </button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20%">Sumber</th>
                        <th>Kategori</th>
                        <th scope="col" style="width: 20%">Judul</th>
                        <th scope="col" style="width: 15%">Tanggal</th>
                        <th scope="col" style="width: 30%">Langkah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>https://tekno.kompas.com/</td>
                        <td>Gadged</td>
                        <td>Spesifikasi dan Harga Asus ROG 8, 8 Pro, dan 8 Pro Edition di Indonesia</td>
                        <td>12/FEB/2024</td>
                        <td>
                            <button class="btn btn-success" onclick="editCategory()">Edit</button>
                            <button class="btn btn-danger" onclick="deleteCategory()">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </body>
</html>
