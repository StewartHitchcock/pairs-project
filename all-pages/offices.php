<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr Gilbert Andrews | Consultant Psychiatrist</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/ec34e9393d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   
</head>
<body>
    <?php include "pages/header.php"; ?>
    <div class = "office-bckgrnd">
        <div class = "office-cnt">
            <h2>My Offices</h2>
            <div class = "office-spn"></div>
            <h3>By Road<h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt tortor id velit dictum, id suscipit massa elementum. Curabitur efficitur purus nulla, et efficitur ex rhoncus vel. </p>
            <h3>By Train<h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt tortor id velit dictum, id suscipit massa elementum. Curabitur efficitur purus nulla, et efficitur ex rhoncus vel. </p>
            <div id="mapid"></div>
             <!-- Make sure you put this AFTER Leaflet's CSS -->
            <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
            integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
            crossorigin=""></script>
        </div>
    </div>
    
    <?php include "pages/footer.php"; ?>
</body>
</html>