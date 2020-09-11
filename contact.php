<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Vishal</title>
  </head>
  <body id="top">
    <nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-primary">
      <span class="d-none d-xl-block" style="margin-left:200px "></span>
        <a class="navbar-brand text-white" href="index.php">Vishal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav text-center">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="project.php">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="certificate.php">Certifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contact.php">Contact <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
      <section>
      <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12 col-lg-10 col-xl-8 col-md-10">
      <div class="tabc">
      <div class="test">
         <h3 class="text-primary text-center">Contact</h3>
      </div>
      <div class="para">
        <form action="" method="post">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="First name"  required autofocus>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" name="lname" class="form-control" id="validationDefault02" placeholder="Last name"  required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" name="city" class="form-control" id="validationDefault03" placeholder="City" required>
    </div>
    <div class="col-md-12 mb-3">
    <label >Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Email address" required >
    </div>
    
  </div>
  <!-- <div id="space"></div> -->
  <div class="form-group" style="margin-top:5px;">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="suggest" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
  </div>
  <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
</form>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$email=$_POST['email'];
$suggest=$_POST['suggest'];
if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      $query="INSERT INTO userinfo (firstname,lastname,city,email,suggestions) values ('$fname','$lname','$city','$email','$suggest')";
        if(mysqli_query($conn,$query))
        {
          echo "Form Submitted";
          $to = "$email";
          $subject = "Response From vishalsingh.ga";
          $message = "$fname Thank You For looking my website. 
          I will respond you shortly";
          $headers = "From: vishalsingh.ga";
          mail($to,$subject,$message,$headers);
        }
        else {
            echo "an Error Occured";
        }
    }
    else {
        echo "Invalid Email";
    }
}
?>
      </div>

    </div><br><br>
  </div>
</div>
</div>
    </section>
<footer class="footer foot mt-auto py-3">
        <div class="container">
          <span >This is the end of a page</span>
          <a href="#top" class="btn btn-dark">back to top</a>
          <p>Copyright &copy2020 All Rights Reserved</p>
        </div>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>