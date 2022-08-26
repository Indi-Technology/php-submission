<?php

class Flasher
{

   public static function setFlash($messages, $actions, $tipe)
   {
      $_SESSION['flash'] = [
         'messages' => $messages,
         'actions' => $actions,
         'tipe' => $tipe
      ];
   }

   public static function flash()
   {
      if (isset($_SESSION['flash'])) {
         echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                  Data Article <strong>' . $_SESSION['flash']['messages'] . '</strong> ' . $_SESSION['flash']['actions'] . ' 
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

         unset($_SESSION['flash']);
      }
   }
}
