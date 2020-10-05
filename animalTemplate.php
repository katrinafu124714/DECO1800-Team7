<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Animal</title>
</head>

<body>
    <?php

    function getSpecieInfo($specie) {

        //API call
        $specieURL = 'https://apps.des.qld.gov.au/species/?f=json&op=speciessearch&kingdom=animals&species='.$specie;
        $data = file_get_contents($specieURL);
        $data = json_decode($data, true);
        

        $ScientificName = $data['Species']['0']['ScientificName'];
        $ConservationStatus = $data['Species']['0']['ConservationStatus']['NCAStatus'];

        $api_key = '18578751-c87aa0c0f6e901144b7f7926c';
        $specie_image_url = 'https://pixabay.com/api/?key=' . $api_key  ."&q=". urlencode($specie);
        $img = file_get_contents($specie_image_url);
        $img = json_decode($img, true);
        $img = $img['hits'][0]['webformatURL'];

        echo "
        <h1>ConservationStatus: $ConservationStatus</h1>
        <h1>ScientificName: $ScientificName</h1>
        <section class=\"particular_animal\">
        <img src=$img>
        </section>
        ";
    }
    ?>
    <?php
    
    function getSpecieID($specieID) {
        $specie = $_GET['id'];
    }

    ?>
    <?php include('header.php'); ?>
    <section class = "<?php

    $specie = $_GET['id'];

    if($specie == "koala") {echo 'koala_background';} 
    elseif ($specie == "kangaroo") {echo 'kangaroo_background';}
    elseif ($specie == "humpback") {echo 'humpback_background';}
    elseif ($specie == "possum") {echo 'possum_background';}
    elseif ($specie == "Dingo") {echo 'Dingo_background';}
    elseif ($specie == "wallaby") {echo 'wallaby_background';}
    ?>">
        <div class="mammal_title">
            <?php 
            $specie = $_GET['id'];
            
            if($specie == "koala") 
                {   echo '
                    <section class=\"koala_backgound\">
                    <h1> Koala </h1>
                    </section>
                ';}
                elseif ($specie == "kangaroo") 
                {   echo '
                    <section class=\"kangaroo_backgound\">
                    <h1> Kangaroo </h1>
                    </section>
                ';}
                elseif ($specie == "humpback") 
                {   echo '
                    <section class=\"humpback_background\">
                    <h1> Humpback Whale</h1>
                    </section>
                ';}
                elseif ($specie == "Dingo") 
                {   echo '
                    <section class=\"Dingo_backgound\">
                    <h1> Dingo </h1>
                    </section>
                ';}
                elseif ($specie == "wallaby") 
                {   echo '
                    <section class=\"wallaby_backgound\">
                    <h1> Wallaby </h1>
                    </section>
                ';}
                elseif ($specie == "possum") 
                {   echo '
                    <section class=\"possum_backgound\">
                    <h1> Possum </h1>
                    </section>
                ';}
                ?>
            <div class="horizontal_line"></div>
            <p>Mammals (from Latin mamma "breast") are vertebrate animals constituting the class Mammalia (/məˈmeɪliə/), and characterized by the presence of mammary glands which in females produce milk for feeding (nursing) their young, a neocortex (a region of the brain), fur or hair, and three middle ear bones. </p>
        </div>
    </section>

    <section class="particular_animal">
        <?php
            $specie = $_GET['id'];
            getSpecieInfo($specie);
            ?>
    </section>
    <?php include('footer.php'); ?>
</body>
