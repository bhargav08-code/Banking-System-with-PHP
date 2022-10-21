
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers</title>
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
    <link rel="shortcut icon" href="bank-img.png" type="image/x-icon">
    <!-- styling -->
    <style><?php include 'style.css'; ?></style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>
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
            <a class="nav-link" href="indexw.php">Home</a>
        </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
      Action
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="send_money.php">Send Money</a>
          <a class="dropdown-item" href="#">View Customer</a>
        
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



<section class="c3">
    <h1 class="text-center">All Customers</h1>
</section>

<?php

    

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Connection not established: ".mysqli_connect_error());
}else{

    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);
?>
   <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Account No.</th>
      <th>Balance</th>
   
      <th>Send Money</th>
    </tr>
  </thead>

       
            <?php
echo "<tbody>";
    while($row = mysqli_fetch_assoc($result)){
    echo    '
    <tr>
    <td>
      <div class="d-flex align-items-center">
      <img
            src="icon.jpg"
            class="rounded-circle"
            alt=""
            style="width: 45px; height: 45px"
            />
        <div class="ms-3">
          <p class="fw-bold mb-1">'.$row['name'].'</p>
          <p class="text-muted mb-0">'.$row['email'].'</p>
        </div>
      </div>
    </td>
    <td>
      <p class="fw-normal mb-1">'.$row['accno'].'</p>
      
    </td>
    <td>
    <span >'.$row['blc'].'</span>
    </td>
    <td>
    <a href="send_money.php?reads='.$row['accno'].'"
    <button type="button" class="btn  bg-warning btn-sm btn-rounded">
        Send Money
      </button>
      </a>
    </td>
    </tr>';
}

}
echo "</tbody>";
?>







<!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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