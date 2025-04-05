<?php
// Get values from the form
$baseAOfTrapezoid = $_POST["a_base"];
$baseBOfTrapezoid = $_POST["b_base"];
$heightOfTheTrapezoid = $_POST["height"];

// Calculate area using the formula
$area = (($baseAOfTrapezoid + $baseBOfTrapezoid) / 2) * $heightOfTheTrapezoid;
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of Trapezoid" />
  <meta name="author" content="Kyle Matthew" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Area of Trapezoid</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of a Trapezoid (PHP)</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        <?php
        echo "If a trapezoid has base A = " . $baseAOfTrapezoid . " mm, base B = " . $baseBOfTrapezoid . " mm, and height = " . $heightOfTheTrapezoid . " mm,<br><br>";
        echo "The area of the trapezoid is: <strong>" . round($area, 2) . " mm²</strong>.";
        ?>
        <br><br>
        <a href="./index.php">Return to calculator</a>
        <br><br>
        <img src="./images/trapezoid.svg" alt="Trapezoid image" />
      </div>
    </main>
  </div>
</body>

</html>