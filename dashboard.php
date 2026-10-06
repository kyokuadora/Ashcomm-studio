<?php

session_start();

// Kalau belum login, kembali ke halaman login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Ashcomm Studio</title>

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
                <a href="dashboard.php">Dashboard</a>
            </li>

            <li>
                <a href="portfolio.php">Portfolio</a>
            </li>

            <li>
                <a href="commission.php">Commission</a>
            </li>

            <li>
                <a href="request.php">Request</a>
            </li>

            <li>
                <a href="contact.php">Contact</a>
            </li>

            <li>
                <a href="logout.php">Logout</a>
            </li>

        </ul>

    </nav>

</header>


<!-- DASHBOARD -->

<section class="dashboard">

    <div class="dashboard-content">

        <p class="section-label">
            ASHCOMM STUDIO ✦
        </p>

        <h1>
            Welcome, <?php echo htmlspecialchars($username); ?>!
        </h1>

        <p>
            Welcome to your Ashcomm Studio dashboard.
            Explore artworks, choose a commission,
            or send your own art request.
        </p>


        <!-- DASHBOARD MENU -->

        <div class="dashboard-grid">


            <a href="portfolio.php" class="dashboard-card">

                <h3>
                    Portfolio
                </h3>

                <p>
                    Explore Ashlyn's artwork,
                    character designs, and illustrations.
                </p>

                <span>
                    View Artwork →
                </span>

            </a>


            <a href="commission.php" class="dashboard-card">

                <h3>
                    Commission
                </h3>

                <p>
                    Choose the type of artwork
                    you would like to commission.
                </p>

                <span>
                    View Prices →
                </span>

            </a>


            <a href="request.php" class="dashboard-card">

                <h3>
                    Ashmission
                </h3>

                <p>
                    Create a custom request
                    for your character and illustration.
                </p>

                <span>
                    Make a Request →
                </span>

            </a>


            <a href="contact.php" class="dashboard-card">

                <h3>
                    Contact
                </h3>

                <p>
                    Have questions?
                    Find out how to contact Ashcomm Studio.
                </p>

                <span>
                    Contact Ashlyn →
                </span>

            </a>


        </div>


        <!-- LOGOUT -->

        <div class="dashboard-logout">

            <a href="logout.php" class="button">
                Logout
            </a>

        </div>

    </div>

</section>


</body>

</html>