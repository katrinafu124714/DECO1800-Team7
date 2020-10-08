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

    if($specie == "mammal") {echo 'mammal_background';} 
    elseif ($specie == "bird") {echo 'birds_background';}
    elseif ($specie == "fish") {echo 'fish_background';}
    elseif ($specie == "reptiles") {echo 'reptiles_background';}
    elseif ($specie == "invertebrates") {echo 'invertebrates_background';}
    elseif ($specie == "amphibians") {echo 'amphibians_background';}
    ?>">

        <div class="mammal_title">
            <?php 
            $specie = $_GET['id'];
            
            if($specie == "bird") 
                {   echo '
                    <section class=\"birds_backgound\">
                    <h1> Birds </h1>
                    </section>
                ';}
                elseif ($specie == "mammal") 
                {   echo '
                    <section class=\"mammal_backgound\">
                    <h1> Mammals </h1>
                    </section>
                ';}
                elseif ($specie == "fish") 
                {   echo '
                    <section class=\"fish_backgound\">
                    <h1> Fishs </h1>
                    </section>
                ';}
                elseif ($specie == "reptiles") 
                {   echo '
                    <section class=\"reptiles_backgound\">
                    <h1> Reptiles </h1>
                    </section>
                ';}
                elseif ($specie == "invertebrates") 
                {   echo '
                    <section class=\"invertebrates_backgound\">
                    <h1> Invertebrates </h1>
                    </section>
                ';}
                elseif ($specie == "amphibians") 
                {   echo '
                    <section class=\"amphibians_backgound\">
                    <h1> Amphibians </h1>
                    </section>
                ';}
                ?>
            <div class="horizontal_line"></div>
            <p>Mammals (from Latin mamma "breast") are vertebrate animals constituting the class Mammalia (/məˈmeɪliə/), and characterized by the presence of mammary glands which in females produce milk for feeding (nursing) their young, a neocortex (a region of the brain), fur or hair, and three middle ear bones. </p>
        </div>
    </section>
    <section id = "animal_type_selection">
        <?php 
            $specie = $_GET['id'];
            
            if($specie == "bird") 
                {   echo '
                    <section id=\"animal_type_selection\">
                    <h1> Birds </h1>
                    </section>
                ';}
                elseif ($specie == "mammal") 
                {   echo '
                    <section id=\"animal_type_selection\">
                    <h1> Mammals </h1>
                    </section>
                ';}
                elseif ($specie == "fish") 
                {   echo '
                    <section id=\"animal_type_selection\">
                    <h1> Fishs </h1>
                    </section>
                ';}
                elseif ($specie == "reptiles") 
                {   echo '
                    <section id=\"animal_type_selection\">
                    <h1> Reptiles </h1>
                    </section>
                ';}
                elseif ($specie == "invertebrates") 
                {   echo '
                    <section id=\"animal_type_selection\">
                    <h1> Invertebrates </h1>
                    </section>
                ';}
                elseif ($specie == "amphibians") 
                {   echo '
                    <section id=\"animal_type_selection\">
                    <h1> Amphibians </h1>
                    </section>
                ';}
            ?>

        <section class="animal_types">

            <article class="mammals">
                <a href='animalTemplate.php?id=koala'>
                <div class = "background"></div>
                </a>
                <p>Koala</p>
            </article>

            <article class="birds">

                <a href='animalTemplate.php?id=kangaroo'>
                <div class = "background"></div>
                </a>
                <p>Kangaroo</p>
            </article>

            <article class="fish">

                <a href='animalTemplate.php?id=humpback'>
                <div class = "background"></div>
                </a>
                <p>Humpback Whale</p>
            </article>
        </section>

        <section class="animal_types">

            <article class="reptile">

                <a href='animalTemplate.php?id=possum'>
                <div class = "background"></div>
                </a>
                <p>Possum</p>
            </article>

            <article class="invertebrate">

                <a href='animalTemplate.php?id=Dingo'>
                <div class = "background"></div>
                </a>
                <p>Dingo</p>
            </article>

            <article class='amphibian'>

                <a href='animalTemplate.php?id=wallaby'>
                <div class = "background"></div>
                </a>
                <p>Wallaby</p>
            </article>
        </section>
    </section>
    <?php include('footer.php')?>
</body>