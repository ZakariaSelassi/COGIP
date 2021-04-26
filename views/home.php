
<?php $title = 'home'; ?>
<?php ob_start(); ?>

  
<nav class="menum navbar navbar-light navbar-expand-md justify-content-center fixed-top">
                <div class="container">

                <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                  <ul class="topBotomBordersOut navbar-nav mx-auto text-center">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#">page1</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">page2</a> 
                    <li class="nav-item"> <a class="nav-link" href="#">page3</a> 
                    <li class="nav-item"> <a class="nav-link" href="#">page4</a> 
                    <li class="nav-item"> <a class="nav-link" href="#">page5</a> 

                    </li>
                  </ul>
                </div>
                </div>   
              </nav>


<?php $navbar = ob_get_clean(); ?>

<?php require('template.php');?> 


