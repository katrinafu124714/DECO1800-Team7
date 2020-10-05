
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css" >
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <title>Wildlife Guide Junior - Learn</title>
</head>

<?php 
    // header("Access-Control-Allow-Origin: *");
    include("header.php");
    $koalaURL = 'https://apps.des.qld.gov.au//species//?op=getspeciesinformation&taxonid=860';
    $data = file_get_contents($koalaURL);
    $data = json_decode($data, true);
    // echo '<pre>' . print_r($data, true) . '</pre>';

    $ScientificName = $data['Species']['ScientificName'];
    $ConservationStatus = $data['Species']['ConservationStatus']['NCAStatus'];
    
    echo "
        <h1>$ConservationStatus</h1>
        <h1>$ScientificName</h1>
    ";


    $api_key = '18578751-c87aa0c0f6e901144b7f7926c';
    $koala_picture_url = 'https://pixabay.com/api/?key=' . $api_key  ."&q=". urlencode('koala');
    $img = file_get_contents($koala_picture_url);
    $img = json_decode($img, true);
    $img = $img['hits'][0]['webformatURL'];

    echo "
        <img src = $img>
    "
        
    

?>

<script src="JavaScript/api.js"></script>


