<?php

session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Akun sementara untuk testing
    if ($username == "ashlyn" && $password == "12345") {

        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
        exit;

    } else {

        $error = "Username atau password salah!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Ashcomm Studio</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- NAVBAR -->

    <header>

        <nav class="navbar">

            <div class="logo">
                ASHCOMM
            </div>

            <ul class="nav-links">

                <li>
                    <a href="index.php">Home</a>
                </li>

                <li>
                    <a href="portfolio.php">Portfolio</a>
                </li>

                <li>
                    <a href="commission.php">Commission</a>
                </li>

            </ul>

        </nav>

    </header>


    <!-- LOGIN -->

    <section class="login-section">

        <div class="login-box">

            <p class="section-label">
                WELCOME BACK ✦
            </p>

            <h1>
                Login
            </h1>

            <p>
                Login to your Ashcomm Studio account.
            </p>


            <?php if ($error != ""): ?>

                <div class="error-message">
                    <?php echo $error; ?>
                </div>

            <?php endif; ?>


            <form method="POST">


                <div class="form-group">

                    <label>
                        Username
                    </label>

                    <input
                        type="text"
                        name="username"
                        placeholder="Enter your username"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>


                <button
                    type="submit"
                    class="button"
                >
                    Login ✦
                </button>

            </form>


            <p class="demo-account">
                Demo account:
                <b>ashlyn</b> /
                <b>12345</b>
            </p>

        </div>

    </section>


</body>

</html>