<?php
$ma="";
if(isset($_POST['submit']))
{
     $mailto = "acm.svcecse@gmail.com";
    $mailSub = "New Message";
    $mailMsg = $_POST['name']." have sent the message ".$_POST['message'];
     require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "acm.svcecse@gmail.com";
   $mail ->Password = "password";
   $mail ->SetFrom("acm.svcecse@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);
     if(!$mail->Send())
   {
         $ma="Mail Not Sent";
   }
   else
   {
       $ma= "Mail Sent Successfully";
   }


}
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        SVCE | ACM Student chapter
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="ACM Student Chapter @SVCE">
    <meta name="description" content="ACM Student Chapter of SVCE">
    <meta name="keywords" content="svce,event,tech,acm,student chapter">
    <meta property="og:title" content="ACM Student Chapter @SVCE">
    <meta property="og:description" content="ACM Student Chapter of SVCE">
    <meta property="twitter:title" content="ACM Student Chapter @SVCE">
    <meta property="twitter:description" content="ACM Student Chapter of SVCE">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/tab.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
    <link href="https://fonts.googleapis.com/css?family=Exo+2:400,500,600" rel="stylesheet">
  </head>
    
<style>
.page-subtitle{color:rgb(131,206,226)}#contact-page .wrapper{flex-direction:column;flex-wrap:wrap}.page-content{padding:50px}.page-content .v-center{flex-direction:column}.form-control{border:none;border-bottom:2px solid #f0f0f0;border-radius:0;box-shadow:none;font-size:18px;margin-top:10px;margin-bottom:10px;-webkit-transition:all ease-in-out 0.4s;transition:all ease-in-out 0.4s;width:60%;max-width:500px}.form-control:focus{border-bottom-color:#999}input{height:55px}button#submit{background:rgb(9,53,122);cursor:pointer;border:none;border-radius:50px;color:white;height:50px;width:190px;margin-top:24px}button#submit:hover{font-weight:700}.fas{color:black}a.contact-link{color:black;text-decoration:underline}a.contact-link:hover{color:white}@media (max-width:1024px){.form-control{width:95%}}
</style>
    
  
<body id="contact-page">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink animated fadeInDown" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">SVCE ACM</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="events.html">Events</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link js-scroll-trigger" href="teams.html">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger active">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #nav -->
    <div class="wrapper animated fadeIn">
        <section class="page-head parallax-bg">
            <div class="container v-center test">
                <h1 class="text-center page-title">Contact Us</h1>
                <h2 class="text-center page-subtitle">Let's Get In Touch!</h2><br>
            </div>
        </section><!-- .page-head -->
        <section id="contact-sec" class="page-content">
            <div class="container v-center">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                        <p><a class="contact-link" href="tel:+919962754468">(+91) 99627 54468</a></p>
                    </div>
                    <div class="col-sm-6 text-center">
                        <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                        <p>
                            <a class="contact-link" href="mailto:acm.svcecse@gmail.com">acm.svcecse@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <form action="/svceacm18-19/test/contact.php" id="contact-form" class="v-center" method="post" >
                    <input type="text" class="form-control" name="name" placeholder="Name" required="">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                    <textarea class="form-control" rows="5" name="message" placeholder="Message" required="" data-gramm_editor="false"></textarea>
                    <button id="submit" type="submit" class="form-control" name="submit">Send Message</button>
                    <?php echo $ma;?>
                </form><!-- #contact-form -->
            </div><!-- .row -->
        </section>
        <!-- Footer -->
        <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                
                <p class=" small mb-4 mb-lg-0">&copy; ACM 2018. All Rights Reserved.</p>
              </div>
              <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item mr-3">
                    <a href="https://www.facebook.com/SVCEACM/">
                      <i class="fab fa-facebook fa-2x fa-fw"></i>
                    </a>
                  </li>
                  <li class="list-inline-item mr-3">
                    <a href="https://twitter.com/acm_svce">
                      <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                    </a>
                  </li>
                    <li class="list-inline-item mr-3">
                    <a href="https://github.com/SVCE-ACM">
                      <i class="fab fa-github fa-2x fa-fw"></i>
                    </a>
                  </li>
                    
                  <li class="list-inline-item">
                    <a href="https://www.instagram.com/svceacm/">
                      <i class="fab fa-instagram fa-2x fa-fw"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
    </div><!-- .wrapper -->
    <!-- ============= contact section ends ================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    $(document).ready(function(){makeParallax($(window).width(),100);$(window).on('resize',function(){var windowWidth=$(this).width();makeParallax(windowWidth,100)});outroAnimation('.navbar','.wrapper')})
    </script>
</body>

</html>