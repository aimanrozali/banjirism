<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Banjirism</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
  crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
</head>

<style>

img{
  border-radius: 30px;
}

.btn1{
  border: none;
  outline: none;
  height: 50px;
  width: 100%;
  background-color: black;
  color: white;
  border-radius: 5px;
  font-weight: bold;
}

.btn1:hover{
  background-color: white;
  /* border: 1px solid; */
  color: black;
}
</style>

<style>
    .row{
      /* background-color: white; */
      border-radius: 30px;
      /* box-shadow: 12px 12px 22px black; */
    }

    img{
      border-radius: 30px;
    }

    .btn1{
      border: none;
      outline: none;
      height: 50px;
      width: 100%;
      background-color: black;
      color: white;
      border-radius: 5px;
      font-weight: bold;
    }

    .btn1:hover{
      background-color: white;
      /* border: 1px solid; */
      color: black;
    }
  </style>


<body>

    <nav class="navbar navbar-expand-md navbar-light " style="background:#5690e9">
      <div class="container-xxl">
        <a href="<?php echo base_url(); ?>" class="navbar-brand">
          <img src="<?php echo base_url(); ?>/assets/logoz.png"  height="50" alt="logo">
        </a>
        <!-- toggle buttom for mobile nav -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#main-nav" aria controls="main-nav" aria-expanded="false"
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-end align-center fw-bold" id="main-nav">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item ms-lg-4">
              <a class="nav-link" href="home.php#aboutUs">About Us</a>
            </li>
            <li class="nav-item ms-lg-4">
              <a class="nav-link" href="home.php#eBantuan">e-Bantuan</a>
            </li>
            <li class="nav-item ms-lg-4">
              <a class="nav-link" href="<?php echo base_url('Login/index'); ?>">Log in</a>
            </li>
            <li class="nav-item ms-lg-4">
              <a class="nav-link" href="<?php echo base_url('Register/index'); ?>">Register</a>   
            </li>
          </ul>
        </div>
      </div> 
    </nav>