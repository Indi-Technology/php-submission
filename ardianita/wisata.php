<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MainYuk! - DESTINASI WISATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/627ec75588.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">MainYuk!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Destinasi Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <h1>Destinasi Wisata</h1>
            <a class="btn btn-primary btn-sm" style="float: right;" type="submit" data-bs-toggle="modal" data-bs-target="#addModal"><i class="fa-solid fa-circle-plus"></i> Tambah Destinasi Wisata</a><br><br>
            <?php
            $result = mysqli_query($koneksi, "SELECT * FROM tb_wisata ORDER BY id_wisata ASC");
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-4 my-auto mx-auto">
                            <img src="img/<?= $data['foto']; ?>" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data['nama_wisata']; ?></h5>
                                <p class="card-text text-justify"><?= $data['deskripsi']; ?></p>
                                <p class="card-text"><small><?= $data['alamat']; ?></small></p>
                                <a type="submit" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?= $data['id_wisata']; ?>">Edit</a>
                                <a type="submit" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $data['id_wisata']; ?>">Hapus</a>
                            </div>
                        </div>

                        <div class="modal fade" id="editModal<?= $data['id_wisata']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Data Destinasi Wisata</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="proses-update.php" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <input type="hidden" class="form-control" name="id_wisata" value="<?= $data['id_wisata']; ?>">
                                            <div class="form-group">
                                                <label>Nama Destinasi Wisata</label>
                                                <input type="text" class="form-control" name="nama_wisata" value="<?= $data['nama_wisata']; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" rows="2" name="alamat" required><?= $data['alamat']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <textarea class="form-control" rows="4" name="deskripsi" required><?= $data['deskripsi']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Gambar</label>
                                                <br><img src="img/<?= $data['foto']; ?>" width="150px" height="120px" class="mb-2" />
                                                <input type="file" class="form-control" name="foto">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <input type="submit" class="btn btn-primary" name="edit" value="Simpan">
                                                <input type="reset" class="btn btn-danger" name="reset" value="Reset">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="deleteModal<?= $data['id_wisata']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="delete.php" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <input type="hidden" class="form-control" name="id_wisata" value="<?= $data['id_wisata']; ?>">
                                            <h5 class="text-center">Apakah Anda Yakin Ingin Menghapus Data <p class="text-danger"><?= $data['nama_wisata']; ?></p>
                                            </h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <input type="submit" class="btn btn-danger" name="hapus" value="Ya">
                                                <input type="reset" class="btn btn-secondary" data-bs-dismiss="modal" value="Tidak">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>

            <div class="card mb-3">
                <div class="row">
                    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Destinasi Wisata</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="proses-add.php" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Nama Destinasi Wisata</label>
                                            <input type="name" class="form-control" name="nama_wisata" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="2" name="alamat" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" rows="4" name="deskripsi" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" class="form-control" name="foto" required>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                                            <input type="reset" class="btn btn-danger" name="reset" value="Reset">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>