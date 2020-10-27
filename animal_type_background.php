<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Animal Type</title>
</head>


<body>
    <?php include('header.php'); ?>
    <section class = "<?php

    $specie = $_GET['id'];

    echo "{$specie}_background";
    ?>">

        <div class="mammal_title">
            <?php 

            $specie =$_GET['id'];
            $specieTitle = ucfirst($_GET['id']);
            $select_description = null;

            $mammals_description = "Mammals are among the most adaptable animals on the planet. They are found on every continent and in every ocean, and range in size from tiny bumblebee bats to enormous blue whales. Mammals as a group use every possible form of locomotion. Terrestrial species walk, run, jump, climb, hop, swing, dig, and burrow. Aquatic ones swim, shuffle, and dive.";
            $birds_description = "Birds are vertebrate animals adapted for flight. Many can also run, jump, swim, and dive. Some, like penguins, have lost the ability to fly but retained their wings. Birds are found worldwide and in all habitats. The largest is the nine-foot-tall ostrich. The smallest is the two-inch-long bee hummingbird.";
            $fish_description = "All fish share two traits: they live in water and they have a backbone—they are vertebrates.Apart from these similarities, however, many of the species in this group differ markedly from one another. Some species, such as the weedy sea dragon, are so bizarre they seem almost unreal.";
            $invertebrates_description = "Invertebrates are animals without a backbone or bony skeleton.They range in size from microscopic mites and almost invisible flies to giant squid with soccer-ball-size eyes.";
            $amphibians_description = "Amphibians are small vertebrates that need water, or a moist environment, to survive.The species in this group include frogs, toads, salamanders, and newts. All can breathe and absorb water through their very thin skin.";
            $reptiles_description = "Reptiles are air-breathing vertebrates covered in special skin made up of scales, bony plates, or a combination of both.They include crocodiles, snakes, lizards, turtles, and tor- toises. All regularly shed the outer layer of their skin. Their metabolism depends on the temperature of their environment.";

            switch ($specie) {
                case "mammal":
                    $select_description = $mammals_description;
                    break;
                case "birds":
                    $select_description = $birds_description;
                    break;
                case "fish":
                    $select_description = $fish_description;
                    break;
                case "reptiles":
                    $select_description = $reptiles_description;
                    break;
                case "invertebrates":
                    $select_description = $invertebrates_description;
                    break;
                case "amphibians":
                    $select_description = $amphibians_description;
                    break;
              }

            echo "<section class=\"$specie_backgound\">
                <h1> $specieTitle </h1>
                </section>
                <div class=\"horizontal_line\"></div>
                <p>$select_description</p>
                ";
                ?>
            <!-- <div class="horizontal_line"></div>
            <p>Mammals (from Latin mamma "breast") are vertebrate animals constituting the class Mammalia (/məˈmeɪliə/), and characterized by the presence of mammary glands which in females produce milk for feeding (nursing) their young, a neocortex (a region of the brain), fur or hair, and three middle ear bones. </p> -->
        </div>
    </section>
    <section id = "animal_type_selection">
        <?php 
            $specie = $_GET['id'];
            $select_list = null;

            $mammals_list = array("koala", "red kangaroo", "humpback whale", "possum", "Dingo", "wallaby");
            $birds_list = array("Australian reed warbler", "black-necked stork", "green catbird", "sooty shearwater", "golden-headed cisticola", "masked woodswallow");
            $fishs_list = array("smooth stingray", "silky shark", "Australian bass", "barramundi", "australian smelt", "Eastern blue groper");
            $reptiles_list = array("freshwater crocodile", "Eastern water dragon", "common death adder", "chameleon gecko", "saw-shelled turtle", "painted dragon");
            $amphibians_list = array("cane toad", "green treefrog", "wallum sedge frog", "rough frog", "javelin frog", "Revealed frog");
            $invertebrate_list = array("Richmond birdwing butterfly", "Boggmoss snail", "Cairns birdwing", "Desert Scorpion", "Australian emperor", "green snail");

            switch ($specie) {
                case "mammal":
                    $select_list = $mammals_list;
                    break;
                case "birds":
                    $select_list = $birds_list;
                    break;
                case "fish":
                    $select_list = $fishs_list;
                    break;
                case "reptiles":
                    $select_list = $reptiles_list;
                    break;
                case "invertebrates":
                    $select_list = $invertebrate_list;
                    break;
                case "amphibians":
                    $select_list = $amphibians_list;
                    break;
              }

            
            echo "<section id=\"animal_type_selection\">
                <h1> $specieTitle </h1>
                </section>
                
                <section class=\"animal_types\">

                <article class=\"mammals\">
                    <a href='animalTemplate.php?id=$select_list[0]'>
                    <div class = \"$select_list[0]background\"></div>
                    </a>
                    <p>" .ucfirst($select_list[0]). "</p>
                </article>
    
                <article class=\"birds\">
    
                    <a href='animalTemplate.php?id=$select_list[1]'>
                    <div class = \"$select_list[1]background\"></div>
                    </a>
                    <p>" .ucfirst($select_list[1]). "</p>
                </article>
    
                <article class=\"fish\">
    
                    <a href='animalTemplate.php?id=$select_list[2]'>
                    <div class = \"$select_list[2]background\"></div>
                    </a>
                    <p>" .ucfirst($select_list[2]). "</p>
                </article>
            </section>
    
            <section class=\"animal_types\">
    
                <article class=\"reptile\">
    
                    <a href='animalTemplate.php?id=$select_list[3]'>
                    <div class = \"$select_list[3]background\"></div>
                    </a>
                    <p>" .ucfirst($select_list[3]). "</p>
                </article>
    
                <article class=\"invertebrate\">
    
                    <a href='animalTemplate.php?id=$select_list[4]'>
                    <div class = \"$select_list[4]background\"></div>
                    </a>
                    <p>" .ucfirst($select_list[4]). "</p>
                </article>
    
                <article class=\"amphibian\">
    
                    <a href='animalTemplate.php?id=$select_list[5]'>
                    <div class = \"$select_list[5]background\"></div>
                    </a>
                    <p>" .ucfirst($select_list[5]). "</p>
                </article>
            </section>
        </section>
                ";
            ?>
    <?php include('footer.php')?>
</body>