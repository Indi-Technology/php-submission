<div class="container mt-5 mb-5">
   <div class="card text-center">
      <div class="card-header">
         <h6>Category by: <?= $data['posts']['category']; ?></h6>
      </div>

      <div class="card-body">
         <img src="https://source.unsplash.com/1200x400?<?= $data['posts']['category']; ?>" class="d-flex img-fluid" alt="">
         <h3 class="card-title"><?= $data['posts']['title']; ?></h3>
         <p class="card-text"><?= $data['posts']['text_body']; ?></p>
         <a href="<?= BASEURL; ?>/article" class="btn btn-primary">Back</a>

      </div>
      <div class="card-footer text-muted">
         <?php
         $date = date_create("2022-08-25");
         echo date_format($date, "Y-m-d");
         ?>
      </div>
   </div>
</div>