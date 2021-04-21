<?php 
  require_once "model/object//header.php";
?>


<h1>COGIP.app</h1>

    <div id="container">
        <p> Espace de connexion </p>

        <form action="verification.php" method="POST">
                    <h1>Connexion</h1>
                    
                    <label><b>Email</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required="required">

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required="required">

                    <input type="submit" id='submit' value='LOGIN' >
                    
                    
                    <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                    ?>
        </form>
    </div>



<?php 
  require_once "model/object/footer.php ";
?>
