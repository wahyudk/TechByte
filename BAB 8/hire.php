<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:../login.php');
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
        <h3>Hire Pegawai</h3>
            <button type="button" class="btn btn-primary" onclick="location.href='hire-entry.php'">
                Menambahkan Data
            </button>
            <button type="button" class="btn btn-primary" onclick="location.href='hire-cetak.php'">
                Save As PDF
            </button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 30%">Role</th>
                        <th scope="col" style="width: 10%">Jumlah</th>
                        <th scope="col" style="width: 30%">Umur</th>
                        <th scope="col" style="width: 20%">Langkah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
					<?php
					include 'koneksi.php';
					$sql = "SELECT * FROM tb_hire";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
								<tr>
									<td colspan='7' align='center'>
										Data Kosong
									</td>
								</tr>";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
                    	<tr>
						<td>$data[butuh]</td>
						<td>$data[jumlah]</td>
						<td>$data[umur]</td>
                      	<td>
                        <a class='btn-edit' href=hire-edit.php?id=$data[id]>
                               Edit
                        </a> 
                        <a class='btn-delete' href=hire-hapus.php?id=$data[id]>
                            Hapus
                        </a>
                      </td>
                    </tr>
                  ";
					}
					?>
                    </tr>
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
