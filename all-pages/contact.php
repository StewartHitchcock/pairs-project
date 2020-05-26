<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Gilbert Andrews | Consultant Psychiatrist</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/ec34e9393d.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "header.php"; ?>
    <div class = "cntct-frm-bckgrnd">   
        <div class = "cntct-frm">
            <div class = "frm-lft">
                <form action="action.php" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="telephone">Telephone Number:</label><br>
                <input type="text" id="telephone" name="telephone"><br>
                <label for="message">Message:</label><br>
                <textarea name="message" rows="7" cols="30"></textarea><br>
                <label for="gdpr">GDPR Tickbox:</label>
                <input type="checkbox" id="check" name="gdpr"><br>
                <!-- Recaptcha? -->
                <input class="submit" type="submit" value="Submit">
            </div>
            <div class = "frm-mid">
                <h2>My Philosophy</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt, dolor eu pellentesque hendrerit, libero libero ornare nibh, sit amet blandit eros nunc et ante. Donec pretium neque ut rhoncus tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat massa sed dui tempus, sed luctus augue fermentum. Curabitur urna lectus, faucibus eu lacus malesuada, condimentum maximus lectus. Etiam tortor velit, hendrerit eu vulputate id, scelerisque eu urna. Nunc nec convallis mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt, dolor eu pellentesque hendrerit, libero libero ornare nibh, sit amet blandit eros nunc et ante. Donec pretium neque ut rhoncus tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat massa sed dui tempus, sed luctus augue fermentum.</p>
            </div>
            <div class = "frm-rght">
                <div class="homepage-image"></div>
            </div>
        </div>

    </div>
    </form>
</body>
<footer>
    <?php include "footer.php"; ?>
</footer>
</html>

