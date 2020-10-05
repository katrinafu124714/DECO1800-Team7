<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Mammals</title>
</head>


<!-- ----------------------------LOGO && Search box------------------------------------ -->
<body>
  <!-- head -->
  <?php $page = "mammal";
  include('header.php');
  include('animal_type_background.php');?>

<!-- ----------------------------Animal Type Selection(mammal, amphibians...)------------------------------------ -->


  <section id = "animal_type_selection">
    <h1>Mammals</h1>

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
            <a href='animalTemplate.php?id=blue+whale'>
            <img src="images/fish.jpg" alt="A lion image in the animal_type_selection">
            </a>
        </figure>
        <p>Whale</p>
      </article>
    </section>

    <section class="animal_types">

      <article class="reptile">

          <figure>
              <a href='animalTemplate.php?id=Tasmanian devil'>
              <img src="images/reptiles.jpg" alt="A koala image in the animal_type_selection">
              </a>
          </figure>
          <p>Tasmanian devil</p>
      </article>

      <article class="invertebrate">

          <figure>
              <a href='animalTemplate.php?id=Dingo'>
              <img src="images/invertebrate.jpg" alt="A kangaroo image in the animal_type_selection">
              </a>
          </figure>
          <p>Dingo</p>
      </article>

      <article class="amphibian">

        <figure>
            <a href="animal_type.html">
            <img src="images/amphibian.jpg" alt="A lion image in the animal_type_selection">
            </a>
        </figure>
        <p>wallaby</p>
      </article>
    </section>
  </section>
  <?php include("footer.php") ?>
</body>
<script src="JavaScript/main.js"></script>

</html>