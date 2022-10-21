<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="bank-img.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sparks Bank</title>
    <!-- font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
   <!-- 
    font-awesome
    -->

    <!-- styling -->
    <style><?php include 'style.css'; ?></style>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body style="overflow-x:hidden">
<?php include 'sp.php'; ?>
<div id="lock"><br>
<p style="color:black; margin-top: 25px;" class="lock"><p>We recommend users to use the site on laptop/desktop.</p>
</div>

<nav class="navbar bg-dark navbar-expand-lg navbar-dark sticky-top">
    <a class="navbar-brand title" href><span class="s1">SPARK</span> BANK</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
            <a class="nav-link" href="">Home</a>
        </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
      Action
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="send_money.php">Send Money</a>
          <a class="dropdown-item" href="customers.php">View Customer</a>
        
          <a class="dropdown-item" href="transaction.php">All Transaction</a>
          <a class="dropdown-item" href="check_bal.php">Check Balance</a>
        </div>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="#section2">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contactUs">Contact Us</a>
        </li>
       
    </ul>
 </div>
</nav>
<div class= "main2">
<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div>
<div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</div>

<section class="section main-banner" id="top" data-section="section1">
  
      <img src="bank-img.png" />

      <div class="img-overlay header-text">
        <div class="caption">
          <h3>Modern Banking.</h3>
          <h2>Lasting <em>Relationships.</em></h2>
          <div class="main-button">
            <div class="scroll-to-section">
              <a href="#section2" class="a">Why choose spark</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- feature -->
<div >
    <section class="feature" id="section2"  data-aos="zoom-out">
<div class="row">
    <div class="col-lg-6">
<img src="Management.jpg">
    </div>


<div class="col-lg-6">
<div class="f1">
    <h2 class="title">Management</h2>

    <p class="con1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Maxime mollitia, molestiae quas vel sint commodi
                        repudiandae consequuntur voluptatum laborum numquam
                        blanditiis harum quisquam eius sed odit fugiat iusto
                        fuga praesentium optio, eaque rerum! Provident similique
                        accusantium nemo autem. Veritatis
                      </p>
</div>



</div>







 <!-- main -->
</div>                   

    </section>

</div>

<div>
    <section class="feature" id="section2"  data-aos="zoom-out">
<div class="row">
<div class="col-lg-6">
<div class="f1">
    <h2 class="title">Security</h2>

    <p class="con1">
    There is nothing we take more seriously than the safety
                        of your personal and financial information. With both
                        physical security and digital security in mind, we have
                        taken every precaution necessary to ensure you and your
                        assets can rest easy.
                      </p>
</div>
</div>


<div class="col-lg-6">
<img src="security.jpg">
    </div>
 
</div>

    </section>


</div>

<div>
    <section class="feature" id="section2"  data-aos="fade-right">
<div class="row">
    <div class="col-lg-6">
<img src="tech.jpg">
    </div>


<div class="col-lg-6">
<div class="f1">
    <h2 class="title">Technology</h2>

    <p class="con1"> We believe in the value of both a hearty handshake and a
                        handheld device. To make banking as convenient as
                        possible for our valued clients, we are committed to
                        making investments in the future of digital banking.
                      </p>
</div>
</div>
 
</div>

    </section>


</div>
<!-- Footer -->
<div>
<footer class="footer-08" id="contactUs"  data-aos="fade-down">
<div class="container-fluid px-lg-5">
<div class="row">
<div class="col-md-9 py-5">
<div class="row">
<div class="col-md-4 mb-md-0 mb-4">
<h2 class="footer-heading">About us</h2>
<p>  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Maxime mollitia, molestiae quas vel sint commodi
                        repudiandae consequuntur voluptatum laborum numquam
                        blanditiis harum quisquam eius sed odit fugiat iusto</p>

        <p style="margin-top:20px">Created By : Bhargav Garge</p>
       <ul class="about">
        <li><a href="https://twitter.com/____bhargav___"><i class="bi bi-twitter"></i></a></li>&emsp;
        <li><a href="https://www.linkedin.com/in/bhargav-garge-81b619234/?originalSubdomain=in"><i class="bi bi-linkedin"></i></a></li>
</ul>
<ul class="ftco-footer-social p-0">
<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><span class="ion-logo-twitter"></span></a></li>
<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><span class="ion-logo-facebook"></span></a></li>
<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><span class="ion-logo-instagram"></span></a></li>
</ul>
</div>
<div class="col-md-8">
<div class="row justify-content-center">
<div class="col-md-12 col-lg-9">
<div class="row">
<div class="col-md-4 mb-md-0 mb-4">
<h2 class="footer-heading">Discover</h2>
<ul class="list-unstyled">
<li><a href="#" class="py-1 d-block">Buy &amp; Sell</a></li>
<li><a href="#" class="py-1 d-block">Merchant</a></li>
<li><a href="#" class="py-1 d-block">Giving back</a></li>
<li><a href="#" class="py-1 d-block">Help &amp; Support</a></li>
</ul>
</div>
<div class="col-md-4 mb-md-0 mb-4">
<h2 class="footer-heading">About</h2>
<ul class="list-unstyled">
<li><a href="#" class="py-1 d-block">Staff</a></li>
<li><a href="#" class="py-1 d-block">Team</a></li>
<li><a href="#" class="py-1 d-block">Careers</a></li>
<li><a href="#" class="py-1 d-block">Blog</a></li>
</ul>
</div>
<div class="col-md-4 mb-md-0 mb-4">
<h2 class="footer-heading">Resources</h2>
<ul class="list-unstyled">
<li><a href="#" class="py-1 d-block">Security</a></li>
<li><a href="#" class="py-1 d-block">Global</a></li>
<li><a href="#" class="py-1 d-block">Charts</a></li>
<li><a href="#" class="py-1 d-block">Privacy</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row mt-md-5">
<div class="col-md-12">

</div>
</div>
</div>
<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
<h2 class="footer-heading footer-heading-white">Contact us</h2>
<form action="#" class="contact-form">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Email">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Subject">
</div>
<div class="form-group">
<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
</div>
<div class="form-group">
<button type="submit" class="form-control  s submit px-3">Send</button>
</div>
</form>
</div>
</div>
</div>
</footer>
</div>
<!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>

AOS.init({
  duration: 1000
})

</script>
<script >
  const loader = document.querySelector(".main2");

const main = document.querySelector(".super");
function hide(){
  loader.style.display = "none";
}
function show(){
  main.classList.toggle('done'); 
}
window.addEventListener("load" , () => {
  setTimeout(hide , 1500);
  setTimeout(show , 1500);
})
</script>
</body>
</html>