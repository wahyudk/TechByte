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
				<form action="hire-proses.php" method="post" enctype="multipart/form-data">
					<label for="butuh">Dibutuhkan</label>
					<input class="input" type="text" name="butuh" id="butuh" placeholder="butuh" />
					<label for="jumlah">Jumlah</label>
					<input class="input" type="text" name="jumlah" id="jumlah" placeholder="jumlah" />
                    <label for="umur">Umur</label>
					<input class="input" type="text" name="umur" id="umur" placeholder="umur" />
					<button type="submit" class="btn btn-simpan" name="simpan">Simpan</button>
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
