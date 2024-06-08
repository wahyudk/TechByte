<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="logo.jpeg" />
	<link rel="stylesheet" href="css/Input.css" />
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin | Input Berita</title>
</head>
<body>
	<div class="sidebar">
		<div class="logo-details">
			<i class="bx bxs-window-al"></i>
			<span class="logo_name">Thech Byte ADMIN</span>
		</div>
		<ul class="nav-links">
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
                <a href="Input.php">
                    <i class="bx bx-news"></i>
                    <span class="links_name">Input Berita</span>
                </a>
            </li>
			<li>
				<a href="#">
					<i class="bx bxs-log-out-circle"></i>
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
				<span class="admin_name">Admin</span>
			</div>
		</nav>
		<div class="home-content">
			<h3>Input Berita</h3>
			<div class="form-login">
				<form action="">
					<label for="categories">Sumber</label>
					<input class="input" type="text" name="sumber" id="sumber" placeholder="sumber" />
					<label for="categories">Kategori</label>
					<input class="input" type="text" name="kategori" id="kategori" placeholder="kategori" />
					<label for="categories">Judul</label>
					<input class="input" type="text" name="judul" id="judul" placeholder="judul" />
					<label for="photo">Tanggal</label>
					<input class="input" type="text" name="tanggal" id="tanggal" placeholder="tanggal" />
					<button type="button" class="btn btn-simpan" id="btnSimpan" name="simpan">
						Simpan
					</button>
				</form>
			</div>
		</div>
	</section>
	<script>
		document.getElementById("btnSimpan").addEventListener("click", function() {
			// Tambahkan logika atau fungsi yang ingin dijalankan saat tombol "Simpan" diklik
			alert("Data berhasil disimpan!");
		});
	</script>
</body>
</html>