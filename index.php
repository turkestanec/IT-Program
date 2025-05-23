<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>IT Proger платформасы</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
  <nav class="navbar">
    <a href="#home">Басты бет</a>
    <a href="#about">Біз жайлы</a>
    <a href="#course">Курстар</a>
    <a href="#contact">Байланыс</a>
  </nav>
</header>

<section class="course" id="course">
  <h1>Курстар тізімі:</h1>
  <div class="c-bx">
    <?php
    $sql = "SELECT * FROM courses";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      echo "<div class='course-bx'>";
      echo "<img src='" . $row['image_url'] . "' alt='" . $row['title'] . "' />";
      echo "<h3>" . $row['title'] . "</h3>";
      echo "<p>" . $row['description'] . "</p>";
      echo "<button>Толығырақ</button>";
      echo "</div>";
    }
    ?>
  </div>
</section>

</body>
</html>
