<?php require 'php/components/nav-item.php';?>

<!-- NAVIGATOR BAR -->
<nav id="navbar" class="navbar navbar-expand navbar-light bg-secondary sticky-top mt-0 ">
  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon bg-light"></span>
  </button>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
    <ul class="nav navbar-nav">
      <?php 
      createNavItem("home", "HOME");
      createNavItem("about", "ABOUT"); 
      createNavItem("portfolio", "PORTFOLIO"); 
      createNavItem("contact", "CONTACT");  
      ?>
    </ul>
  </div>
</nav>
<!-- END OF NAVIGATOR BAR -->