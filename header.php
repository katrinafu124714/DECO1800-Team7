<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="splide-2.4.12/dist/css/splide.min.css">
  <script src="splide-2.4.12/dist/js/splide.js"></script>
  <link rel="stylesheet" href="CSS/style.css" >
  <!-- this code are refer to https://fonts.google.com/specimen/Rowdies?query=rowdies&sidebar.open=true&selection.family=Rowdies:wght@700 -->
  <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap" rel="stylesheet">
  <title>Wildlife Guide Junior - Learn</title>

<!-- ----------------------------LOGO && Search box------------------------------------ -->
<main>
<body>
  <header>
    <div id = "logo">
      <a href = "index.php">
        <img src="images/Logo.png" alt="logo of the wildlife website">
      </a>
    </div>
    <div>
      <nav id = "teacher_mode">
        <a href="teacher_mode.html">Teacher mode</a>
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
          <a href = "quiz.php">Quiz</a>
        </li>
        <li class="koala">
          <img src="images/koala.png" alt="a Koala image">
        </li>
        <li class = "<?php if($page == "explore"){echo 'current';} ?>">
          <a href = "explore.php">Map</a>
        </li>
        <li class = "<?php if($page == "video"){echo 'current';} ?>">
          <a href = "video.php">Videos</a>
        </li>
      </ul>
    </nav>
  </section>
</main>