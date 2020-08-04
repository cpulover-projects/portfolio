 <!-- Valid form from server side -->
 <?php
 $error="";
 $success="";
if ($_POST){
 
  if(!$_POST["name"]){
    $error.="Name is required <br>";
  }
  if(!$_POST["email"]){
    $error.="Email is required <br>";
  } elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $error.= "Invalid email format <br>";
  }
  if(!$_POST["message"]){
    $error.="Message is required <br>";
  }
 
  if($error!=""){
     $error="<div class='alert alert-danger'>".$error."</div>";
  } else {
    $emailTo="justacpulover@gmail.com";
    $subject=$_POST["name"];
    $content=$_POST["message"];
    $header="From ".$_POST["email"];

    if (mail($emailTo, $subject, $content, $header)){
      $success="<div class='alert alert-success'>Your message is sent</div>";
    } else {
      $success="<div class='alert alert-danger'>Your message could not be sent! Please try again later.</div>";
    }
  }
}
?>

  <!-- CONTACT -->
  <div class="page-content" id="contact">
    <br><br><br>
    <h1>Contact</h1>
    <br>
    <div class="container">
    <div role="alert" id="error">
      <?php echo $error.$success; ?>
  </div>
 
      <form  method="post">

        <div class="form-group" >
          <!-- <label for="name">Name</label> -->
          <input type="text" name="name" id="name" class="form-control" placeholder="Your name">
        </div>
        <div class="form-group">
          <!-- <label for="email">Email</label> -->
          <input type="email" name="email" id="email" class="form-control" placeholder="Your email">
        </div>
        <div class="form-group">
          <!-- <label for="message">Message</label> -->
          <br>
          <textarea name="message" id="message"  rows="10" placeholder="Your message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Summit</button>
      </form>
      </div>
      <br>
      

  </div>
  <!-- END OF CONTACT -->
