<?php
class About extends Controller
{
   public function index($nama = 'Muhammad Vallen Firdaus', $pekerjaan = 'Mahasiswa')
   {
      $data['nama'] = $nama;
      $data['pekerjaan'] = $pekerjaan;
      $data['judul'] = 'About Me';
      // this->view($view, $data = [])
      // data tersebut di ambil dari controller.php
      // ketika array nya kosong, maka posisi default nya akan jatuh ke index
      $this->view('templates/header', $data);
      $this->view('about/index', $data);
      $this->view('templates/footer');
   }

   public function page()
   {
      $data['judul'] = 'About Pages';
      $this->view('templates/header', $data);
      $this->view('about/page');
      $this->view('templates/footer');
   }
}
