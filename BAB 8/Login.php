<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/Login.css">
</head>
<body>
    <header>
        <h1>TechByte</h1>
    </header>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="Login.php">Login</a>
        <a href="Register.php">Register</a>
        <a href="About.php">Tentang Kami</a>
    </nav>
    <div class="container">
        <h2>Login</h2>
        <form action="login-proses.php" method="post">
            <input class="input" type="text" name="username" placeholder="Username" />
            <input class="input" type="password" name="password" placeholder="Password" />
            <button type="submit" class="btn_login" name="login" id="login"> Login
		    </button>
            <?php if(isset($error)) { ?>
                <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
            <?php } ?>
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
    </div>
</body>
</html>