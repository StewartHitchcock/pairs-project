<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Gilbert Andrews | Consultant Psychiatrist</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Pushy CSS -->
    <link rel="stylesheet" href="css/pushy.css">
    <script src="https://kit.fontawesome.com/ec34e9393d.js" crossorigin="anonymous"></script>
</head>
<body>
        <!-- Pushy Menu -->
        <nav class="pushy pushy-right" data-focus="#first-link">
            <?php include "pages/sidenav.php"; ?>
        </nav>

        <!-- Site Overlay -->
        <div class="site-overlay"></div>

        <!-- Your Content -->
        <div id="container">
            <?php include "pages/header.php"; ?>
            <?php include "pages/landing-page/showcase.php"; ?>
            <?php include "pages/landing-page/content.php"; ?>
            <footer>
                <?php include "pages/footer.php"; ?>
            </footer>
        </div>
        <?php include "pages/scripts.php"?>
</body>
</html>