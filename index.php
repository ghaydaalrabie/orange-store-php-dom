<?php
$phones = [
  [
    'name' => 'Samsung Galaxy Note 20 Ultra',
    'img_url' => 'https://images.samsung.com/levant/smartphones/galaxy-note20/buy/sm-n980-981-galaxynote20-combo-mysticbronze-330.png',
    'rate' => '5',
    'brand' => 'Samsung',
    'price' => 'JOD 759.00',
    'is_out_of_stock' => '1'
  ],
  [
    'name' => 'INFINIX Zero 8',
    'img_url' => 'https://mobizil.com/wp-content/uploads/2020/08/infinix-Zero-8.jpg',
    'rate' => '0',
    'brand' => 'Infinix',
    'price' => 'JOD 205.00',
    'is_out_of_stock' => '1'
  ],
  [
    'name' => 'Apple iPhone 12 Pro',
    'img_url' => 'https://res.cloudinary.com/grover/image/upload/f_webp,q_auto/b_white,c_pad,dpr_2.0,h_500,w_520/f_auto,q_auto/v1630928341/qrltxaedtq23fxf5cqd0.png',
    'rate' => '0',
    'brand' => 'Apple',
    'price' => 'JOD 973.00',
    'is_out_of_stock' => '1'

  ],
  [
    'name' => 'ITEL A48',
    'img_url' => 'https://m.media-amazon.com/images/I/71wW5aMDRGL._SL1500_.jpg',
    'rate' => '0',
    'brand' => 'iTel',
    'price' => 'JOD 66.00'
  ],
  [
    'name' => 'Samsung Galaxy S21 Ultra',
    'img_url' => 'https://media.extra.com/s/aurora/100230261_800/Samsung-Galaxy-S21-Ultra%2C-5G%2C-128GB%2C-Phantom-Black?locale=en-GB,en-*,*&$Listing-Product-2x$',
    'rate' => '0',
    'brand' => 'Samsung',
    'price' => 'JOD 799.00'
  ],

  [
    'name' => 'Galaxy A52',
    'img_url' => 'https://mobizil.com/wp-content/uploads/2021/03/Samsung-Galaxy-A52.jpg',
    'rate' => '4',
    'brand' => 'Samsung',
    'price' => 'JOD 267.00'
  ],



];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Phone | Orange Jordan E shop</title>
  <!-- Copyright © 2014 Monotype Imaging Inc. All rights reserved -->
  <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/orange-helvetica.min.css" rel="stylesheet" integrity="sha384-ARRzqgHDBP0PQzxQoJtvyNn7Q8QQYr0XT+RXUFEPkQqkTB6gi43ZiL035dKWdkZe" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/css/boosted.min.css" rel="stylesheet" integrity="sha384-Di/KMIVcO9Z2MJO3EsrZebWTNrgJTrzEDwAplhM5XnCFQ1aDhRNWrp6CWvVcn00c" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://boosted.orange.com/docs/5.1/assets/brand/orange-logo.svg" width="50" height="50" role="img" alt="Boosted" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <div class="container">
    <div class="row">
      <?php

      for ($i = 0; $i < count($phones); $i++) {
      ?>

       <div class="col-4 ">
          <div class="card" style="width: 20rem;">
            <img style="  height: 300px ;" src=" <?php echo ($phones[$i]["img_url"]) ?> " class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"><?php echo ($phones[$i]["brand"]) ?></p>
              <h5 class="card-title"> <?php echo ($phones[$i]["name"]) ?> </h5>


              <?php

              // i use for loop to draw all colored stars 

              for ($j = 1; $j < ($phones[$i]["rate"]); $j++) {
                echo  '<span style="color: orange  ;" class ="fa fa-star checked"></span> ';
              }
              // i use it to know Number of stars to reach five

              for ($k = 0; $k <  (5- $phones[$i]["rate"]); $k++) {
                echo  '<span  class ="fa fa-star checked"></span> ';
              }

              ?>
              <div>

              </div>
              <br>
              <p class="card-text"> <u>View Details > </u> </p>
              <hr>
              <h5 class="card-price"> <?php echo ($phones[$i]["price"]) ?></h5>



              <a href="#" class="btn btn-dark">Buy Now </a>
              <svg class="cart" xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg>

            </div>
          </div>
        </div>
      <?php
      }
      ?>

    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/boosted@5.1.3/dist/js/boosted.bundle.min.js" integrity="sha384-5thbp4uNEqKgkl5m+rMBhqR+ZCs+3iAaLIghPWAgOv0VKvzGlYKR408MMbmCjmZF" crossorigin="anonymous"></script>






</body>

</html>