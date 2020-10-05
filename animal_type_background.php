<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Animal Type</title>
</head>


<body>
  <section class = "<?php 
  if($page == "mammal") 
  {echo 'mammal_background';} 
  elseif ($page == "bird") {echo 'birds_background';}
  elseif ($page == "fish") {echo 'fish_background';}
  elseif ($page == "reptiles") {echo 'reptiles_background';}
  elseif ($page == "invertebrates") {echo 'invertebrates_background';}
  elseif ($page == "amphibians") {echo 'amphibians_background';}
  ?>">
      <div class="mammal_title">
          <?php if($page == "bird") 
            {   echo '
                <section class=\"birds_backgound\">
                <h1> Birds </h1>
                </section>
            ';}
            elseif ($page == "mammal") 
            {   echo '
                <section class=\"mammal_backgound\">
                <h1> Mammals </h1>
                </section>
            ';}
            elseif ($page == "fish") 
            {   echo '
                <section class=\"fish_backgound\">
                <h1> Fishs </h1>
                </section>
            ';}
            elseif ($page == "reptiles") 
            {   echo '
                <section class=\"reptiles_backgound\">
                <h1> Reptiles </h1>
                </section>
            ';}
            elseif ($page == "invertebrates") 
            {   echo '
                <section class=\"invertebrates_backgound\">
                <h1> Invertebrates </h1>
                </section>
            ';}
            elseif ($page == "amphibians") 
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
</body>