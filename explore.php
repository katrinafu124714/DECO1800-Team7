<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/leaflet.css" >
  <link rel="stylesheet" href="CSS/style.css" >

  <title>Wildlife Guide Junior - Explore</title>
</head>


<!-- ----------------------------LOGO && Search box------------------------------------ -->
<body>
  <!-- head -->
  <?php $page = "explore";include('header.php');?>
  <div style="background-image: url('images/sea_background.jpg');
  background-position: center;">
  <article id="map" style="
    position: relative; 
    height: 500pt;
    width: 80%;
    align-self: center;
    display: inline-block;
    margin:10%;
    ">
  </div>
  </article>
  <?php include("footer.php") ?>


  <script src="JavaScript/jquery-3.4.1.min.js"></script>
  <script src="JavaScript/script.js"></script>
  <script src="JavaScript/leaflet.js"></script>
  <script src="JavaScript/main.js"></script>

</body>

</html>