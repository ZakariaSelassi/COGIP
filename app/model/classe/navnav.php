

<?php ob_start(); ?>
<header>
<nav class="menum navbar navbar-light navbar-expand-md justify-content-center fixed-top">
    <div class="container">
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="topBotomBordersOut navbar-nav mx-auto text-center">
                <li class="nav-item active">
                <a class="nav-link" href="/home">Home</a>
                    </li>
                <li class="nav-item"> <a class="nav-link" href="/home/invoices">Invoices</a></li>
                <li class="nav-item"> <a class="nav-link" href="/home/companies">Companies</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/contact">Contact</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/admin">Admin(test)</a> 
                <li class="nav-item"> <a class="nav-link" href="/home/connexion">Connexion</a>  
                </li>
            </ul>
        </div>
    </div>   
</nav>
</header>
<?php $navnav = ob_get_clean(); ?>

