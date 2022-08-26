<?php 
 include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>IndiLyrics</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand font-weight-bold" href="index.php">IndiLyrics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   
    <div class="container">
      <div class="mt-4">
        <ul class="list-unstyled">
          <?php
          $sql = mysqli_query($conn,"SELECT * FROM lyrics"); 
          while ($lyrics = $sql->fetch_assoc()){
          ?>
          <a href="detail-lyrics.php?id=<?=$lyrics['id_lyrics']?>" style="text-decoration:none; color:black">
          <li class="media">
            
              <img class="mr-3" src="img/<?=$lyrics['img'];?>" width="80px">
            <div class="media-body">
                <h5 class="mt-4"><?=$lyrics['title'];?></h5>
            </div>
          </li>
          </a>
          <hr>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="container">
      <div class="row mb-4">
        <a href="insert-lyrics.php" class="btn btn-outline-info btn-lg btn-block">ADD NEW LYRICS</a>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>