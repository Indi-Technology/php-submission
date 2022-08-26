<?php 
 include 'connect.php';
 $id = $_GET["id"];

  $sql = mysqli_query($conn, "SELECT * FROM lyrics WHERE id_lyrics='$id'");
  $detail = $sql->fetch_assoc();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$id;?>">
        <div class="form-group">
          <label class="control-label" for="title">Title : </label>
          <input type="text" name="title" class="form-control" id="title" value="<?=$detail['title'];?>" required>
        </div>
        <div class="form-group">
          <label class="control-label" for="img">Image : </label>
          <div class="mb-4">
            <img src="img/<?=$detail['img']?>" width="80px">
          </div>
            <input type="file" name="img" class="form-control-file" id="img">
        </div>
        <div class="form-group">
          <label class="control-label" for="lyrics">Lyrics : </label>
          <textarea name="lyrics" class="form-control" id="lyrics" required>
            <?=$detail['body'];?>
          </textarea>
        </div>
        <div class="form-group text-center">
          <button type="reset" class="btn btn-outline-secondary">Reset</button>
          <button type="submit" name="update" class="btn btn-outline-info">Submit</button>
        </div>
      </form>
      <?php
      if (isset($_POST['update'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $lyrics = $_POST['lyrics'];
          
        $imgname = $_FILES['img']['name'];
        $tmpname = $_FILES['img']['tmp_name'];

        if (!empty($tmpname))
        {
          move_uploaded_file($tmpname, "./img/$imgname");
          $update = mysqli_query($conn, "UPDATE lyrics SET
          title='$title', img='$imgname', body='$lyrics'
          WHERE id_lyrics='$id'");
          
        } else {
          $update = mysqli_query($conn, "UPDATE lyrics SET
          title='$title', body='$lyrics'
          WHERE id_lyrics='$id'");
        }
        if($update){
          echo "<script>document.location.href='detail-lyrics.php?id=$id';</script>"; 
        }     
        }
      ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        CKEDITOR.replace( 'lyrics' );
    </script>
  </body>
</html>