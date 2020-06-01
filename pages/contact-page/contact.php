<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Gilbert Andrews | Consultant Psychiatrist</title>
    <link rel="stylesheet" href="../../css/style.css">
    <script src="https://kit.fontawesome.com/ec34e9393d.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
    <?php include "$root/pages/header.php"; ?>
    <div class = "cntct-frm-bckgrnd">   
        <div class = "cntct-frm">
            <div class = "frm-lft">
                <form action="contact-process.php" method="POST">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                    <label for="phone">Phone Number (optional)</label>
                    <input type="text" id="phone" name="phone" placeholder="07123456789">

                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea>

                    <input type="submit" value="Submit">

                </form>
                <?php 
                    $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if (strpos($fullUrl, "valid=firstError") == true){
                        echo "<h3 class='errormsg'>Invalid First Name. Only letter and white spaces are allowed!</h3>";
                    }
                    else if (strpos($fullUrl, "valid=lastError") == true){
                        echo "<h3 class='errormsg'>Invalid Last Name. Only letter and white spaces are allowed!</h3>";
                    }
                    else if (strpos($fullUrl, "valid=phoneError") == true){
                        echo "<h3 class='errormsg'>Invalid Phone Number. Please try again.</h3>";
                    }
                    else if (strpos($fullUrl, "valid=messageError") == true){
                        echo "<h3 class='errormsg'>Invalid Message. Only alpha-numeric characters are allowed!</h3>";
                    }
                    else if (strpos($fullUrl, "valid=success") == true){
                        echo "<h3 class='succmsg'>Submission Successful!</h3>";
                    }
                ?>
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
    <footer>
        <?php include "$root/pages/footer.php"; ?>
    </footer>
    <?php include "$root/pages/scripts.php"?>
</body>
</html>

