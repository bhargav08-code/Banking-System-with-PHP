<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Money</title>
    <!-- font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap"
      rel="stylesheet"
    />
    <!-- bootstrap -->
    <!-- <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    /> -->
   <!-- 
    font-awesome
    -->    <link rel="shortcut icon" href="bank-img.png" type="image/x-icon">

    <!-- styling -->
    <style><?php include 'style.css'; ?></style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>
<?php include 'sp.php'; ?>
<div id="lock"><br>
<p style="color:black; margin-top: 25px;" class="lock"><b>Please rotate the device. </b><br>We support only landscape mode.<br>We recommend users to use the site on laptop/desktop.</p>
</div>
<nav class="navbar bg-dark navbar-expand-lg navbar-dark sticky-top">
    <a class="navbar-brand title" href><span class="s1">SPARK</span> BANK</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
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
            <a class="nav-link" href="">About Us</a>
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

<section class="send">
        <div class="signup-form">
    <form action="send_money.php" method="post" class="form-horizontal">
      	<div class="row">
        	<div class="col-8 offset-4">
				<h2>Transfer Money</h2>
			</div>	
      	</div>			
        <div class="form-group row">
			<label class="col-form-label col-4">From</label>
			<div class="col-8">
            <input type="text" class="formin form-control" name="accno1" id=""
                            placeholder="Sender's Account Number"
                            value="<?php if(isset($_GET['reads'])){echo $_GET['reads'];} ?>">
            </div>        	
        </div>
		<div class="form-group row">
			<label class="col-form-label col-4">To</label>
			<div class="col-8">
                <input type="text" class="form-control" name="accno2" required="required" placeholder="Reciever Account NUmber">
            </div>        	
        </div>
		<div class="form-group row">
			<label class="col-form-label col-4">Amount</label>
			<div class="col-8">
                <input type="number" class="form-control" name="amount" required="required" placeholder="Transfer Money">
            </div>        	
        </div>
		
		<div class="form-group row">
			<div class="col-8 offset-4">
				
				<button type="submit" class="btn btn-primary btn-lg" value="Transfer"  >Transfer</button>
			</div>  
		</div>		      
    </form>
	<div class="text-center c">Want to Check balance ? <a href="check_bal.php" class="here"> Click here</a></div>
</div>
</section>




<?php 

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){


$sender = $_POST['accno1'];
$amount = $_POST['amount'];
$reciever = $_POST['accno2'];


$checkblcquery = "SELECT blc FROM users where accno='$sender'";
$checkblc = mysqli_query($conn, $checkblcquery);
$ava_blc = mysqli_fetch_assoc($checkblc)['blc'];

if($ava_blc >= $amount){
  
$sql1 = "UPDATE users SET blc= blc-$amount WHERE accno='$sender'";
$sql2 = "UPDATE users SET blc= blc+$amount WHERE accno='$reciever'";
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
if($result1 && $result2){
echo  '<script>alert("Amount transfered successfully")</script>';




$sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
$sqltransact = mysqli_query($conn, $sqltran);
}else{
echo  '<script>alert("Something went wrong")</script>';

$sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
$sqltransact = mysqli_query($conn, $sqltran);
}
}else{
  echo  '<script>alert("Not Suffcient  Balance in Account")</script>';
  ;
$sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
$sqltransact = mysqli_query($conn, $sqltran);
}
}
}
?>

<footer class="footer-08" id="contactUs">
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








<!--     
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> -->




<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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