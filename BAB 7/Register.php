<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/Register.css">
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
        <h2>Register</h2>
        <form action="register-proses.php" method="post">
            <input class="input" type="email" name="email" placeholder="Email" />
            <input class="input" type="text" name="username" placeholder="Username" />
            <input class="input" type="password" name="password" placeholder="Password" />
            <button type="submit" class="btn_login" name="register" id="register">Register
			</button>
        </form>
    </div>
    <script src="register.js"></script>
</body>
</html>