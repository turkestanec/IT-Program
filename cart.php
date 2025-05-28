<?php
include 'config/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
  <header class="header">
    <nav class="navbar">
      <a href="#home">Басты бет</a>
      <a href="#about">Біз жайлы</a>
      <a href="#course">Курстар</a>
      <a href="#books">Кітаптар</a>
      <a href="#contact">Байланыс</a>
      <a href="register.php">Кіру</a>
    </nav>
  </header>

     <section class="course" id="course">
  <br><br>
  <h1>Курстар тізімі:</h1>
  <hr>
 
  <div class="c-bx">
    <?php
    $course = 'SELECT * FROM course';
    $course_query = mysqli_query($connection, $course);
    while($row = mysqli_fetch_assoc($course_query)) {
    ?>
      <div class="course-bx">
        <img src="<?php echo $row['img'] ?>" alt="Course">
        <h3><?php echo $row['name'] ?></h3>
        <button><?php echo $row['price'] ?> ₸</button>
      </div>
    <?php
   }
    ?>
  </div> 
  
  <br>

  
  <div class="c-bx">
    <?php
    $course = 'SELECT * FROM course';
    $course_query = mysqli_query($connection, $course);
    while($row = mysqli_fetch_assoc($course_query)) {
    ?>
      <div class="course-bx">
        <img src="<?php echo $row['img'] ?>" alt="Course">
        <h3><?php echo $row['name'] ?></h3>
        <button><?php echo $row['price'] ?> ₸</button>
      </div>
    <?php
   }
    ?>
  </div>
  <br>
 
  
  <div class="c-bx">
    <?php
    $course = 'SELECT * FROM course';
    $course_query = mysqli_query($connection, $course);
    while($row = mysqli_fetch_assoc($course_query)) {
    ?>
      <div class="course-bx">
        <img src="<?php echo $row['img'] ?>" alt="Course">
        <h3><?php echo $row['name'] ?></h3>
        <button><?php echo $row['price'] ?> ₸</button>
      </div>
    <?php
   }
    ?>
  </div>
</section>



</body>
</html>
