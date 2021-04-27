<?php
    include_once('./model/login.php');
class Controller extends Model{

    public function invoke()
    {
        $reslt = $this->getlogin();
        
        if($reslt == 'login')
        {
            include './views/afterlogin.php';
        }
        else
        {
            include './views/loginView.php';
        }
    }
}
?>
