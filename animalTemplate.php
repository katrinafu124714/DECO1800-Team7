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
        $specieURL = 'https://apps.des.qld.gov.au/species/?f=json&op=speciessearch&kingdom=animals&species='.urlencode($specie);
        $data = file_get_contents($specieURL);
        $data = json_decode($data, true);
        

        $CommonName = $data['Species']['0']['AcceptedCommonName'];
        $CommonName = str_replace("-"," ",$CommonName);
  

        $ScientificName = $data['Species']['0']['ScientificName'];
        $ConservationStatus = $data['Species']['0']['ConservationStatus']['NCAStatus'];

        // $api_key = '18578751-c87aa0c0f6e901144b7f7926c';
        // $specie_image_url = 'https://pixabay.com/api/?key=' . $api_key  ."&q=". urlencode($specie);
        // $img = file_get_contents($specie_image_url);
        // $img = json_decode($img, true);
        // $img = $img['hits'][0]['webformatURL'];

        $specie_image_url = "https://en.wikipedia.org/w/api.php?action=query&format=json&formatversion=2&prop=pageimages|pageterms&piprop=original&titles=".rawurlencode($specie);
        $img = file_get_contents($specie_image_url);
        $img = json_decode($img, true);
        $img = $img['query']['pages'][0]['original']['source'];

        if ($img == null) {
            $specie_image_url = "https://en.wikipedia.org/w/api.php?action=query&format=json&formatversion=2&prop=pageimages|pageterms&piprop=original&titles=".rawurlencode($ScientificName);
            $img = json_decode(file_get_contents($specie_image_url),true)['query']['pages'][0]['original']['source'];
            if ($img == null) {
                $specie_image_url = "https://en.wikipedia.org/w/api.php?action=query&format=json&formatversion=2&prop=pageimages|pageterms&piprop=original&titles=".rawurlencode(explode(" ", $specie)[1]);
                $img = json_decode(file_get_contents($specie_image_url),true)['query']['pages'][0]['original']['source'];
                // echo $specie_image_url;
                if ($img == null) {
                    // echo "abc";
                    $specie_image_url = "https://en.wikipedia.org/w/api.php?action=query&format=json&formatversion=2&prop=pageimages|pageterms&piprop=original&titles=".rawurlencode($CommonName);
                    $img = json_decode(file_get_contents($specie_image_url),true)['query']['pages'][0]['original']['source'];
                    echo $specie_image_url;
                }
            }
            // echo $img;
        }



        echo "
        <section class=\"particular_animal_name\">
        <h1>Common Name : $CommonName </h1>
        <h1>ConservationStatus: $ConservationStatus</h1>
        <h1>ScientificName: $ScientificName</h1>
        </section>
        <div>
        <img src=$img>
        </div>
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
    $specieTitle = ucfirst($_GET['id']);

    echo "{$specie}_background";
    ?>">
        <div class="mammal_title">
            <?php 
            $specie = $_GET['id'];
            
            echo "<section class=\"{$specie}_backgound\">
                <h1> $specieTitle </h1>
                </section>";

                ?>
            <div class="horizontal_line"></div>
            <p>Mammals (from Latin mamma "breast") are vertebrate animals constituting the class Mammalia (/məˈmeɪliə/), and characterized by the presence of mammary glands which in females produce milk for feeding (nursing) their young, a neocortex (a region of the brain), fur or hair, and three middle ear bones. </p>
        </div>
    </section>

    <section class="particular_animal">
        <?php
            $specie = $_GET['id'];
            $info = getSpecieInfo($specie);
            ?>
    </section>
    <?php include('footer.php'); ?>
</body>
