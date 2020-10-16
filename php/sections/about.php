<?php require 'php/components/progress-bar.php'?>

<!-- ABOUT ME -->
<div class="page-content" id="about">
  <br><br><br>
  <h1>About</h1>
  <br><br><br>
  <div class="container">
    <div class="row ">
      <div class="col-lg">
        <div class="row d-flex justify-content-center">
          <img id="avt" src="images/avt.jpeg" class="rounded-circle" alt="">
        </div>
        <br>
        <div class="row d-flex justify-content-center">
          <h5>I like creating stuffs, good stuffs.</h5>
        </div>
        <br>
      </div>
      <div class="col-lg">
        <?php
          createProgressBar("Java", "85");
          createProgressBar("Java", "15");
          createProgressBar("Java", "45");
          createProgressBar("Java", "35");
          createProgressBar("Java", "65");
          createProgressBar("Java", "85");
          createProgressBar("Java", "45");
          createProgressBar("Java", "15");
        ?>
      </div>
    </div>
  </div>
  <br>
</div>
<!-- END OF ABOUT ME -->