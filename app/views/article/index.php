   <div class="container mt-3">
      <div class="mt-2 row justify-content-center">
         <div class="col-lg-6">

            <form action="<?= BASEURL; ?>/article/search" method="POST">
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="search article" name="keyword" id="keyword" autocomplete="off">
                  <button class=" btn btn-dark" type="submit" id="searchBtn">search</button>
               </div>
            </form>

         </div>
      </div>

      <div class="mt-2 row justify-content-center">
         <div class="col-lg-6">
            <?php Flasher::flash(); ?>
         </div>
      </div>

      <div class="row mb-3 mt-3">
         <div class="col-lg-6">
            <button type="button" class="btn btn-primary btnInsertData" data-bs-toggle="modal" data-bs-target="#formModal">
               + Post
            </button>
         </div>
      </div>

      <div class="row mb-5">
         <div class="col-lg-6">
            <h3>Article List</h3>
            <ul class="list-group">
               <?php foreach ($data['posts'] as $posts) : ?>
                  <li class="list-group-item">
                     <?= $posts['title']; ?>
                     <a href="<?= BASEURL; ?>/article/delete/<?= $posts['id']; ?>" class="badge text-bg-danger ms-1 float-end" onclick=" 'click', confirm('yakin ?') ">delete</a>
                     <a href="<?= BASEURL; ?>/article/edit/<?= $posts['id']; ?>" class="badge text-bg-success ms-1 float-end updateView" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $posts['id']; ?>">Edit</a>
                     <a href="<?= BASEURL; ?>/article/detail/<?= $posts['id']; ?>" class="badge text-bg-primary ms-1 float-end">detail</a>
                  </li>
               <?php endforeach; ?>
            </ul>
         </div>
      </div>

   </div>


   <!-- Modal -->
   <div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="formLabel">Create New</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
               <form action="<?= BASEURL; ?>/article/insert" method="post">
                  <input type="hidden" name="id" id="id">

                  <div class="form-group mb-3">
                     <label for="title" class="form-label">Title</label>
                     <input type="text" class="form-control" id="title" name="title">
                  </div>

                  <div class="form-group mb-3">
                     <label for="category" class="form-label">Category</label>
                     <input type="text" class="form-control" id="category" name="category">
                  </div>

                  <div class="form-group mb-3">
                     <label for="text_body" class="form-label">Text</label>
                     <textarea class="form-control" id="text_body" name="text_body"></textarea>
                  </div>

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Insert Data</button>
               </form>
            </div>

         </div>
      </div>
   </div>

   <!--  -->