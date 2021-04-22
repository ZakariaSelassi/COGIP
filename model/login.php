<?php
class Model {

   public function getlogin()
   {
      if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){

         if($_REQUEST['username'] == 'ICI' && $_REQUEST['password'] =='MDP'){
            return 'login';
         }
         else{
            return 'invalide user';
         }
      }
   }
}