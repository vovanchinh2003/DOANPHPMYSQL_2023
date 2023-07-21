<?php
include "../connect/config_oop.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <title>Anon - eCommerce Website</title>
  <link rel="shortcut icon" href="../assets/images/logo/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../assets/css/style-prefix.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
</head>

<body>

  <?php
  include "category/navbar.php";
  ?>

  <?php
  include "../view/inc/he.php";
  ?>



  <!--
    - custom js link
  -->
  <script src="../assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>