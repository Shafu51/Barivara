<?php 
session_start();
isset($_SESSION["email"]);
include("navbar.php");


 ?>

 <?php 
include("config/config.php");
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

    .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 100%;
    min-width: 100%;
    margin: auto;
    text-align: center;
    font-family: arial;
    display: inline;
    }

    .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    opacity: 0.8;
    }

    .container {
    padding: 2px 16px;
    }

    .btn {
    width: 100%;
    }

    .image {
    min-width: 100%;
    min-height: 200px;
    max-width: 100%;
    max-height:200px;
    }
</style>
</head>
<body>
<?php 
    $u_email = $_SESSION['email'];
    $auth_user = "SELECT * from tenant where email='$u_email'";
    $auth_query = mysqli_query($db,$auth_user);

    echo '<center><h1>Booked House</h1></center>';

    if(mysqli_num_rows($auth_query)>0)
    {
        while($users = mysqli_fetch_assoc($auth_query))
        {
            $tenant_id = $users['tenant_id'];

            $booking = "SELECT b.booking_id, b.tenant_id, b.house_id, b.created, pp.p_photo, p.city, p.house_type FROM booking b JOIN property_photo pp ON pp.house_id = b.house_id JOIN add_property p ON p.house_id = b.house_id WHERE tenant_id='$tenant_id' GROUP by b.booking_id";
            // echo $booking;exit;
            $booking_query = mysqli_query($db,$booking);
            
            if(mysqli_num_rows($booking_query)>0)
            {
                while ($booking = mysqli_fetch_assoc($booking_query))
                {?>

                    <div class="col-sm-2">
                        <div class="card">
                            <img class="image" src="owner/<?php echo $booking['p_photo'] ?>">

                            <h4><b><?php echo $booking['house_type']; ?></b></h4> 
                            <p><?php echo $booking['city'] ?></p> 
                            <p><?php echo '<a href="view-property.php?house_id='.$booking['house_id'].'"  class="btn btn-lg btn-primary btn-block" >View Property </a><br>'; ?></p><br>
                        </div>
                    </div>

                <?php }
            }
            else{
                echo "<center><h3>Searched Property not found...</h3></center>";
            }
        }
    }
?>

</body>
</html> 
<!-- <div class="col-sm-2">
    <div class="card">
        <img class="image" src="owner/product-photo/a.jpg">
        <h4><b>Family</b></h4> 
        <p><br>
        <b>Notice</b>:  Undefined index: district in <b>D:\Office\Barivara\booked-property.php</b> on line <b>95</b><br>
        Dhaka, </p> 
        <p><a href="view-property.php?property_id=123" class="btn btn-lg btn-primary btn-block">View Property </a><br></p><br>
    </div>
</div> -->