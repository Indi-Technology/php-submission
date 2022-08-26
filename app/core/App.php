<?php

// kelas utama
class App
{
   protected
      $controller = 'Home',
      $method = 'index',
      $params = [];


   public function __construct()
   {
      // isi dari url
      $url = $this->parseURL();
      // mengatasi masalah null
      if ($url == NULL) {
         $url = [$this->controller];
      }

      if (file_exists('../app/controllers/' . $url[0] . '.php')) {
         // mengambil file controller
         $this->controller = $url[0];
         // menghilangkan controller
         unset($url[0]);
      }


      require_once '../app/controllers/' . $this->controller . '.php';
      $this->controller = new $this->controller;

      // method 
      if (isset($url[1])) {
         if (method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
         }
      }

      // params

      if (!empty($url)) {
         // mengisi atau mengambil parameter
         $this->params = array_values($url);
      }

      // jalankan controller dan method serta kirimkan params jika ada
      call_user_func_array([$this->controller, $this->method], $this->params);
   }

   public function parseURL()
   {
      if (isset($_GET['url'])) {
         // menghapus slash di akhir
         $url = rtrim($_GET['url'], '/');
         // menghindari karakter yang aneh
         $url = filter_var($url, FILTER_SANITIZE_URL);
         $url = explode('/', $url);

         return $url;
      }
   }
}
