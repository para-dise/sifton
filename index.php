<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Sifton</title>
  </head>
<body>
  <div class="bg">
    <nav class="navbar navbar-expand-sm navbar-custom">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-cloud"></i> API</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-book"></i> Database Index</a>
    </li>
  </ul>
</nav>
<div class="text-center">
<h1>Sifton</h1>
<div id="container" class="container">
<form action="index.php" method="post">
  <div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text colored-input" id="inputGroup-sizing-lg">E-Mail</span>
  </div>
  <input type="text" name="email" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
</div>
<br />
<input type="submit" class="btn btn-primary btn-lg btn-dark" style="opacity: 0.8;" value="Sift Data">
</form></div>
<?php
$em = $_POST["email"];
//echo "api.php?email=$email";
if(isset($em)) {
  echo "<div class='card mx-auto rounded'>";
  echo "<div class='card-block special-card'>";

  $_POST["email"] = "$em";
  include("api.php");
  echo "</div></div>";
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</div>
</div>
</body>
</html>
