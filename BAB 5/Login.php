<?php
session_start();
// Memastikan pengguna sudah login atau belum
if(isset($_SESSION['username'])) {
    // Jika sudah login, redirect ke halaman dashboard atau halaman lainnya
    header("Location: Admin.php");
    exit;
}

// Cek apakah form login telah di-submit
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Di sini Anda bisa menambahkan validasi username dan password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perhatikan bahwa untuk keamanan, biasanya Anda akan mengenkripsi password sebelum menyimpannya di database.
    // Anda dapat menggunakan fungsi hashing seperti password_hash() dan memverifikasi dengan password_verify().

    // Validasi sederhana (Perhatikan bahwa ini hanya contoh, untuk penggunaan aktual,
    // Anda akan melakukan pemeriksaan di database)
    if($username === 'wahyu' && $password === '2218110') {
        // Jika login berhasil, simpan username di session
        $_SESSION['username'] = $username;
        // Redirect ke halaman dashboard atau halaman lainnya
        header("Location: Admin.php");
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <?php if(isset($error)) { ?>
                <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
            <?php } ?>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </div>
</body>
</html>