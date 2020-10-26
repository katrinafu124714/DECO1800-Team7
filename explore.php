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

    <div style="
    background-image: url('images/sea_background.jpg');
    background-position: center;">
      <div class="container">
         <h3 id="animal-search" style="
            width: 100%;
            height: 30px;
            padding: 20px;
            font-size: 30px;
            align-item: center;
            ">
          Search Animals
         </h3>
         <?php $search_animal_id = $_GET['id'];
          if ($search_animal_id != null) {
            echo "<input type=text id=search value =\"$search_animal_id\" style=\"
            width: 100%;
            height: 30px;
            border-radius: 5px;
            border: 5px solid #bce826;
            padding: 10px;
            font-size: 20px;
            position: relative;
            \">";
          } else {
            echo "<input type=text id=search placeholder=Enter Species Name style=\"
            width: 100%;
            height: 30px;
            border-radius: 5px;
            border: 5px solid #bce826;
            padding: 10px;
            font-size: 20px;
            position: relative\">";
          };
          ?>
        <button onclick="handleInput()" id="searchButton" style="
          border-radius: 5px;
          background-color: #bce826;
          padding: 10px;
          font-size: 20px;
          position: absolute;
          height: 50px;
          width: 120px;
          top: 482px;
          left: 86%;
          "
        >Show Map</button>
        </div>
        <article id="map" style="
          position: relative; 
          height: 500pt;
          width: 80%;
          align-self: center;
          display: inline-block;
          margin:10%;
          margin-top: 2%;
          ">
        </article>
    </div>
  <?php include("footer.php") ?>


  <script src="JavaScript/jquery-3.4.1.min.js"></script>
  <script src="JavaScript/script.js"></script>
  <script src="JavaScript/leaflet.js"></script>
  <script src="JavaScript/main.js"></script>

</body>

</html>