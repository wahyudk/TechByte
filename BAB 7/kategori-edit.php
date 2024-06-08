<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="icon" href="assets/icon.png" />
	<link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/Admin.css">
	<title>Dashboard Admin</title>
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
				<a href="transaction/transaction.php">
					<i class="bx bx-news"></i>
					<span class="links_name">Input Berita</span>
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
				session_start();
				echo $_SESSION['username'];
				?>
			</h1>
			</div>
		</nav>
        <div class="home-content">
			<h3>Input Berita</h3>
			<div class="form-login">
			<form action="kategori-proses.php" method="post" enctype="multipart/form-data">
					<!-- Tambahkan input tersembunyi untuk menyimpan ID -->
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
					<label for="Kategori">Kategori</label>
					<input class="input" type="text" name="kategori" id="kategori" placeholder="kategori" />
					<label for="Judul">Judul</label>
					<input class="input" type="text" name="judul" id="judul" placeholder="judul" />
					<label for="Isi">Isi</label>
					<textarea class="input" name="isi" id="isi" placeholder="isi"></textarea>
					<label for="tanggal">Tanggal</label>
					<input class="input" type="date" name="tanggal" id="tanggal" placeholder="tanggal" />
					<label for="foto">Photo</label>
					<input type="file" name="foto" id="foto" style="margin-bottom: 20px" />
					<!-- Ubah tombol "Simpan" menjadi "Edit" -->
					<button type="submit" class="btn btn-simpan" name="edit">Edit</button>
				</form>
			</div>
		</div>

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
