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

            echo "<section class=\"$specie_backgound\">
                <h1> $specieTitle </h1>
                </section>";
                ?>
            <div class="horizontal_line"></div>
            <p>Mammals (from Latin mamma "breast") are vertebrate animals constituting the class Mammalia (/məˈmeɪliə/), and characterized by the presence of mammary glands which in females produce milk for feeding (nursing) their young, a neocortex (a region of the brain), fur or hair, and three middle ear bones. </p>
        </div>
    </section>
    <section id = "animal_type_selection">
        <?php 
            $specie = $_GET['id'];
            $select_list = null;

            $mammals_list = array("koala", "kangaroo", "humpback whale", "possum", "Dingo", "wallaby");
            $birds_list = array("Australian reed warbler", "shoebill", "humpback", "possum", "Dingo", "wallaby");
            $fishs_list = array("smooth stingray", "silky shark", "Australian bass", "barramundi", "australian smelt", "green snail");
            $reptiles_list = array("freshwater crocodile", "Eastern water dragon", "common death adder", "chameleon gecko", "saw-shelled turtle", "wallaby");
            $amphibians_list = array("cane toad", "treefrog", "wallum sedge frog", "possum", "Dingo", "wallaby");
            $invertebrate_list = array("Richmond birdwing butterfly", "Boggmoss snail", "Cairns birdwing", "Desert Scorpion", "Dead Leaf Grasshopper", "wallaby");

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