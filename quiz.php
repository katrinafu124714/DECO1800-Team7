<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- this icon is refer to https://fontawesome.com/icons?d=gallery -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
  <link rel="stylesheet" href="CSS/style.css" >
  <title>Wildlife Guide Junior - Quiz</title>
</head>
<?php 
$page = "game";
include('header.php');
?>

<body>
  <section id = "quiz_section">
    <div class = "quiz_content">
      
      <h1>Question1</h1>
            
      <h2>Drag the blow animal icon to the corresponding box</h2>
            
        <!-- this code are refer to https://codepen.io/Coding_Journey/pen/YzKpLvE -->
      <section class="draggable-elements">
        <i class="fas fa-cat draggable" draggable="true" id="cat"></i>
        <i class="fas fa-dog draggable" draggable="true" id="dog"></i>
        <i class="fas fa-dove draggable" draggable="true" id="dove"></i>
        <i class="fas fa-fish draggable" draggable="true" id="fish"></i>
        <i class="fas fa-frog draggable" draggable="true" id="frog"></i>
      </section>
            
        <!-- this code are refer to https://codepen.io/Coding_Journey/pen/YzKpLvE -->
      <section class="droppable-elements">
        <div class="droppable" data-draggable-id="frog"><span>Frog</span></div>
        <div class="droppable" data-draggable-id="dove"><span>Bird</span></div>
        <div class="droppable" data-draggable-id="cat"><span>Cat</span></div>
        <div class="droppable" data-draggable-id="fish"><span>Fish</span></div>
        <div class="droppable" data-draggable-id="dog"><span>Dog</span></div>
      </section>
    </div>

    <div class = "quiz_content">
      <h1>Question2</h1>                         
      <h2>What animal is in the picture below?</h2>
      <div class="image_of_quiz"><img src="images/koala.jpg"></div>
      <button class="short_options" type="button" onclick="notCorrect()";>A. Cat</button>
      <button class="short_options" type="button" onclick="notCorrect()";>B. Dog</button>
      <button class="short_options" type="button" onclick="notCorrect()";>C. Monkey</button>
      <button class="short_options" type="button" onclick="correct()";>D. koala</button>
    </div>

    <div class = "quiz_content"> 
      <h1>Question3</h1>                
      <h2>How many whiskers does the average cat have on each side of its face?</h2>
      <div class="image_of_quiz"><img src="images/cat.jpg"></div>
      <button class="short_options" type="button" onclick="notCorrect()";>A. 1</button>
      <button class="short_options" type="button" onclick="notCorrect()";>B. 3</button>  
      <button class="short_options" type="button" onclick="correct()";>C. 12</button>
      <button class="short_options" type="button" onclick="notCorrect()";>D. 5,007</button>
    </div>

    <div class = "quiz_content">      
      <h1>Question4</h1>                     
      <h2>Why don't birds fall off branches when they sleep?</h2>
      <button class="options" type="button" onclick="notCorrect()";>A. They are not fully asleep.</button>
      <button class="options" type="button" onclick="correct()";>B. Their legs lock in place.</button>
      <button class="options" type="button" onclick="notCorrect()";>C. They perch on wide, flat branches.</button>
      <button class="options" type="button" onclick="notCorrect()";>D. Their breathing pattern helps them balance.</button>
    </div>  
       
    <a class="prev_question" onclick="plusSlides(-1)">Previous</a>
    <a class="next_question" onclick="plusSlides(1)">Next</a>
        
  </section>

  <?php
    include('footer.php');
  ?>

<script src="JavaScript/quiz.js"></script>
<script src="JavaScript/main.js"></script>
</body>
</html>
