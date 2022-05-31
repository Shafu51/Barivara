<!DOCTYPE html>
<html lang="en">
<head>
  <title>বাড়িভাড়া</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="navbar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
<nav>
<input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">বাড়িভাড়া</label>
  
 
  <ul class="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="admin-index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
      <?php 
if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
  echo '<li><a href="../logout.php">Logout</a></li>';
}

else {?>
      <li><a href="../how-to-register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="../how-to-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php } ?>
    </ul>
  </div>
</nav>

</body>
</html>
