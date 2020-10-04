<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="splide-2.4.12/dist/css/splide.min.css">
  <script src="splide-2.4.12/dist/js/splide.js"></script>
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Learn</title>
</head><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="splide-2.4.12/dist/css/splide.min.css">
  <script src="splide-2.4.12/dist/js/splide.js"></script>
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Learn</title>
</head>


<!-- ----------------------------LOGO && Search box------------------------------------ -->
<main>
<body>
  <header>
    <div id = "logo">
      <a href = "index.html">
        <img src="images/Logo.png" alt="logo of the wildlife website">
      </a>
    </div>
    <div>
      <nav id = "teacher_mode">
        <a href="quiz.html">Teacher mode</a>
      </nav>
    </div>
  </header>

<!-- ---------------------------Navigation bar------------------------------------- -->

  <section id = "nav">
    <nav id = "navigation">
      <ul>
        <li class = "<?php if($page == "learn"){echo 'current';} ?>">
          <a href="index.php">Learn</a>
        </li>
        <li class = "<?php if($page == "game"){echo 'current';} ?>">
          <a href = "quiz.php">Game</a>
        </li>
        <li class="koala">
          <!-- <a href="index.html"> -->
          <img src="images/koala.png" alt="a Koala image">
          <!-- </a> -->
        </li>
        <li>
          <a href = "explore.php">Explore</a>
        </li>
        <li>
          <a href = "video.html">Videos</a>
        </li>
      </ul>
    </nav>
  </section>
</main>