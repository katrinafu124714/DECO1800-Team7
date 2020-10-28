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
        // $CommonName = str_replace("-"," ",$CommonName);
        $FamilyCommonName = $data['Species']['0']['FamilyCommonName'];
        $Edemecity = $data['Species']['0']['Endemicity'];

        $ScientificName = $data['Species']['0']['ScientificName'];
        $ConservationStatus = $data['Species']['0']['ConservationStatus']['NCAStatus'];

        $specie_image_url = "https://en.wikipedia.org/w/api.php?action=query&format=json&formatversion=2&prop=pageimages|pageterms&piprop=original&titles=".rawurlencode($specie);
        $img = file_get_contents($specie_image_url);
        $img = json_decode($img, true);
        $img = $img['query']['pages'][0]['original']['source'];

        if ($img == null) {
            $specie_image_url = "https://en.wikipedia.org/w/api.php?action=query&format=json&formatversion=2&prop=pageimages|pageterms&piprop=original&titles=".rawurlencode($ScientificName);
            $img = json_decode(file_get_contents($specie_image_url),true)['query']['pages'][0]['original']['source'];
            if ($img == null) {
                $specie_image_url = "https://en.wikipedia.org/w/api.php?action=query&format=json&formatversion=2&prop=pageimages|pageterms&piprop=original&titles=".rawurlencode(explode(" ", $specie, 1)[1]);
                $img = json_decode(file_get_contents($specie_image_url),true)['query']['pages'][0]['original']['source'];
                // echo $specie_image_url;
                if ($img == null) {
                    // echo "abc";
                    $specie_image_url = "https://en.wikipedia.org/w/api.php?action=query&format=json&formatversion=2&prop=pageimages|pageterms&piprop=original&titles=".rawurlencode($CommonName);
                    $img = json_decode(file_get_contents($specie_image_url),true)['query']['pages'][0]['original']['source'];
                }
            }
        }
        // if still null
        if ($img == null) {
            $img = "https://cdn.browshot.com/static/images/not-found.png";
        }

        // this regex method is refer to https://stackoverflow.com/questions/8175655/preg-replace-all-spaces/48081908
        $cartoon_image = preg_replace('/\s+/', '%20', $specie);

        echo "

        <section class=\"particular_animal_section_one\">
            <div class=\"particular_animal_name\">
            <h1>Common Name : $CommonName </h1>
            <h1>ConservationStatus: $ConservationStatus</h1>
            <h1>ScientificName: $ScientificName</h1>
            </div>
            <div class=\"api_image\">
            <img src=$img>
            </div>
        </section>
        <div class=\"section_breaker\"></div>
        <section class=\"particular_animal_section_two\">
            <div class=\"api_image_cartoon\">
                <img src=images/{$cartoon_image}%20cartoon.jpg>
            </div>
            <div class=\"particular_animal_detail\">
            <h1>Family Common Name: $FamilyCommonName</h1>
            <h1>Endemicity(Whether the specie is native to the area): $Edemecity</h1>
                <div class =\"view_on_map_button\">
                <a href='explore.php?id=$CommonName'>View on map</a>
                </div>
            </div>
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
    $specieTitle = ucfirst($_GET['id']);

    echo "{$specie}_background";
    ?>">
        <div class="mammal_title">
            <?php 
            $specie = $_GET['id'];
            $select_description = null;

            $mammals_description = "Mammals are among the most adaptable animals on the planet. They are found on every continent and in every ocean, and range in size from tiny bumblebee bats to enormous blue whales. Mammals as a group use every possible form of locomotion. Terrestrial species walk, run, jump, climb, hop, swing, dig, and burrow. Aquatic ones swim, shuffle, and dive.";
            $birds_description = "Birds are vertebrate animals adapted for flight. Many can also run, jump, swim, and dive. Some, like penguins, have lost the ability to fly but retained their wings. Birds are found worldwide and in all habitats. The largest is the nine-foot-tall ostrich. The smallest is the two-inch-long bee hummingbird.";
            $fish_description = "All fish share two traits: they live in water and they have a backbone—they are vertebrates.Apart from these similarities, however, many of the species in this group differ markedly from one another. Some species, such as the weedy sea dragon, are so bizarre they seem almost unreal.";
            $invertebrates_description = "Invertebrates are animals without a backbone or bony skeleton.They range in size from microscopic mites and almost invisible flies to giant squid with soccer-ball-size eyes.";
            $amphibians_description = "Amphibians are small vertebrates that need water, or a moist environment, to survive.The species in this group include frogs, toads, salamanders, and newts. All can breathe and absorb water through their very thin skin.";
            $reptiles_description = "Reptiles are air-breathing vertebrates covered in special skin made up of scales, bony plates, or a combination of both.They include crocodiles, snakes, lizards, turtles, and tor- toises. All regularly shed the outer layer of their skin. Their metabolism depends on the temperature of their environment.";
        

              if ($specie ==="koala" || $specie ==="red kangaroo" || $specie ==="humpback whale" || $specie ==="possum" || $specie ==="Dingo" || $specie === "wallaby") {
                $select_description = $mammals_description;
            } elseif ($specie ==="Australian reed warbler" || $specie ==="pacific black duck" || $specie ==="green catbird" || $specie ==="sooty shearwater" || $specie ==="golden-headed cisticola" || $specie === "masked woodswallow") {
                $select_description = $birds_description;
            } elseif ($specie ==="smooth stingray" || $specie ==="silky shark" || $specie ==="Australian bass" || $specie ==="barramundi" || $specie ==="australian smelt" || $specie === "Eastern blue groper") {
                $select_description = $fish_description;
            } elseif ($specie ==="freshwater crocodile" || $specie ==="Eastern water dragon" || $specie ==="common death adder" || $specie ==="chameleon gecko" || $specie ==="saw-shelled turtle" || $specie === "painted dragon") {
                $select_description = $reptiles_description;
            } elseif ($specie ==="cane toad" || $specie ==="green treefrog" || $specie ==="wallum sedge frog" || $specie ==="rough frog" || $specie ==="javelin frog" || $specie === "Revealed frog") {
                $select_description = $amphibians_description;
            } elseif ($specie ==="Richmond birdwing butterfly" || $specie ==="Boggmoss snail" || $specie ==="Cairns birdwing" || $specie ==="Desert Scorpion" || $specie ==="Australian emperor" || $specie === "green snail") {
                $select_description = $invertebrates_description;
            }
            
            echo "<section class=\"{$specie}_backgound\">
                <h1> $specieTitle </h1>
                </section>
                <div class=\"horizontal_line\"></div>
                <p>$select_description</p>";
                ?>
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
