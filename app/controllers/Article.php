<?php

class Article extends Controller
{
   public function index()
   {
      $data['judul'] = 'Articles';
      $data['posts'] = $this->model('Article_model')->getAllArticle();
      $this->view('templates/header', $data);
      $this->view('article/index', $data);
      $this->view('templates/footer');
   }

   public function detail($id)
   {
      $data['judul'] = 'Detail Article';
      $data['posts'] = $this->model('Article_model')->getArticleById($id);
      $this->view('templates/header', $data);
      $this->view('article/detail', $data);
      $this->view('templates/footer');
   }

   public function insert()
   {

      if ($this->model('Article_model')->insertDataArticle($_POST) > 0) {
         Flasher::setFlash('berhasil', 'ditambahkan', 'success');

         header('Location: ' . BASEURL . '/article');
         exit;
      } else {
         Flasher::setFlash('gagal', 'ditambahkan', 'danger');

         header('Location: ' . BASEURL . '/article');
         exit;
      }
   }

   public function delete($id)
   {

      if ($this->model('Article_model')->deleteDataArticle($id) > 0) {
         Flasher::setFlash('berhasil', 'dihapus', 'success');

         header('Location: ' . BASEURL . '/article');
         exit;
      } else {
         Flasher::setFlash('gagal', 'dihapus', 'danger');

         header('Location: ' . BASEURL . '/article');
         exit;
      }
   }

   public function getedit()
   {
      echo json_encode($this->model('Article_model')->getArticleById($_POST['id']));
   }

   public function editdata()
   {

      if ($this->model('Article_model')->editDataArticle($_POST) > 0) {
         Flasher::setFlash('berhasil', 'diubah', 'success');

         header('Location: ' . BASEURL . '/article');
         exit;
      } else {
         Flasher::setFlash('gagal', 'diubah', 'danger');

         header('Location: ' . BASEURL . '/article');
         exit;
      }
   }

   public function search()
   {
      $data['judul'] = 'Article list';
      $data['posts'] = $this->model('Article_model')->getDataArticle();

      $this->view('templates/header', $data);
      $this->view('article/index', $data);
      $this->view('templates/footer');
   }
}
