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

                <figure>
                    <a href='animalTemplate.php?id=koala'>
                    <img src="images/koala_article.jpg" alt="A koala image in the animal_type_selection">
                    </a>
                </figure>
                <p>Koala</p>
            </article>

            <article class="birds">

                <figure>
                    <a href='animalTemplate.php?id=kangaroo'>
                    <img src="images/kangaroo.jpg" alt="A kangaroo image in the animal_type_selection">
                    </a>
                </figure>
                <p>Kangaroo</p>
            </article>

            <article class="fish">

                <figure>
                    <a href='animalTemplate.php?id=humpback'>
                    <img src="images/humpback.jpg" alt="A lion image in the animal_type_selection">
                    </a>
                </figure>
                <p>Humpback Whale</p>
            </article>
        </section>

        <section class="animal_types">

            <article class="reptile">

                <figure>
                    <a href='animalTemplate.php?id=possum'>
                    <img src="images/possum.jpg" alt="A koala image in the animal_type_selection">
                    </a>
                </figure>
                <p>Possum</p>
            </article>

            <article class="invertebrate">

                <figure>
                    <a href='animalTemplate.php?id=Dingo'>
                    <img src="images/Dingo.jpg" alt="A kangaroo image in the animal_type_selection">
                    </a>
                </figure>
                <p>Dingo</p>
            </article>

            <article class='amphibian'>

                <figure>
                    <a href='animalTemplate.php?id=wallaby'>
                    <img src="images/wallaby.jpg" alt="A lion image in the animal_type_selection">
                    </a>
                </figure>
                <p>Wallaby</p>
            </article>
        </section>
    </section>
    <?php include('footer.php')?>
</body>