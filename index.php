
<?php
session_start();

require_once 'helpers/security.php';

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--Meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Ibrahim's website">
  <meta name="keywords" content="HTML,CSS,JavaScript">
  <meta name="author" content="Ibrahim Atagayev">

  <title>My Website</title>

  <!-- Bootstrap CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="css/contact.css" rel="stylesheet">
  <link rel="icon" href="images/icon.jpg">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index2.html">IBRAHIM ATAGAYEV</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index2.html">Home

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.html">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signin.html">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="slides.html">Slides</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <br><br>

  <iframe style="margin-left: auto; width: 100%" frameborder="30"
    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d184439.87981664966!2d-79.51930078246546!3d43.75473145750886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgoogle+maps!5e0!3m2!1sen!2sca!4v1552273104709"
    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  <br><br><br><br><br><br>

  <div style="position: absolute; top: 70%; left: 19%">

    <button class="btn" onclick="getLocation()">GEOLOCATION</button>

    <p id="demo"></p>

  </div>

  

  <a style="position: absolute; top: 70%; left: 64%;" href="images/resume.png" download> <button class="btn">RESUME DOWNLOAD </button></a>

  <section class="mb-4">


    <h2 class="h1-responsive font-weight-bold text-center my-4">CONTACT US</h2>
  
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us
      directly. Our team will get back to you within
      a matter of hours to help you.</p>

    <div class="row">


      <div class="col-md-9 mb-md-0 mb-5">

      <?php if(!empty($errors)) : ?>
    <div>
        <ul>
            <li><?php echo implode('<li></li>', $errors); ?></li>
        </ul>
    </div>

    <?php endif; ?>
        <form style="margin-left: 1%;" id="contact-form" name="contact-form" method="post" action="contact.php">


          <div class="row">

       
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="name" name="name" class="form-control" autocomplete="off"<?php echo isset($fields['name']) ? 'value="'.e($fields['name']).'"' : ''?> >
                <label for="name" class="">Your name</label>
              </div>
            </div>


     
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="email" name="email" class="form-control" autocomplete="off"<?php echo isset($fields['email']) ? 'value="'.e($fields['email']).'"' : ''?>>
                <label for="email" class="">Your email</label>
              </div>
            </div>
  

          </div>
   

   
          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <input type="text" id="subject" name="subject" class="form-control">
                <label for="subject" class="">Subject</label>
              </div>
            </div>
          </div>
     

     
          <div class="row">

       
            <div class="col-md-12">

              <div class="md-form">
                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"><?php echo isset($fields['message']) ? e($fields['message']) : ''?></textarea>
                <label for="message">Your message</label>
              </div>

            </div>
          </div>
    

        </form>

        <div class="text-center text-md-left">
          <a style="margin-left: 20%;" class="btn btn-primary"
            onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
      </div>



      <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
          <li><i class="fas fa-map-marker-alt fa-2x"></i>
            <p>Toronto, ON M9W 6X5, Canada</p>
          </li>

          <li><i class="fas fa-phone mt-4 fa-2x"></i>
            <p>(647) 772-7575</p>
          </li>

          <li><i class="fas fa-envelope mt-4 fa-2x"></i>
            <p>ibrahim-atagayev@hotmail.com</p>
          </li>
        </ul>
      </div>
 

    </div>

  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; ibrahim-atagayev@hotmail.com
        <a href="http://triosdevelopers.com/~I.Atagayev/">SITEMAP</a>
      </p>
    </div>
 
  </footer>


  <!-- Bootstrap JavaScript -->
  <script src="js/contact.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);

?>