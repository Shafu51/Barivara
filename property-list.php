<?php 
include("config/config.php");
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="card.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
  <div>
<?php 

$sql="SELECT * FROM add_property";
    $query=mysqli_query($db,$sql);

    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
        $house_id=$rows['house_id'];

?>
<style>
  .titl{
     color : rgb(37, 113, 255); 
     float: left;
     padding: 5px;
    margin: 18px;
    font-size: 10px;
     
    }
    span{
      font-size: 20px;
      font-weight: bold;
    }
</style>

<div class="col-sm-3">
<div class="card">
<div class="image">
<?php


        $sql2="SELECT * FROM property_photo where house_id='$house_id'";
    $query2=mysqli_query($db,$sql2);

    if(mysqli_num_rows($query2)>0)
    {
      $row=mysqli_fetch_assoc($query2); 
        $photo=$row['p_photo'];
        echo  '<img src="owner/'.$photo.'">'; }?>
        </div>
        <hr>
  <div class="title">
  <h4>For <b><?php echo $rows['house_type']; ?></b></h4> 
    </div>
    <hr>
    <div class="title">
    <i class="fa fa-map-marker">
           <span>Location:     <?php echo $rows['city']; ?> </span></i>
          </div>
 
    <br>
    <hr>
    <div class="title">
  <h1><b>Price: <?php echo $rows['price']; ?></b></h1> 
    </div>
    

    <div class="button">
  <?php echo '<a href="view-property.php?house_id='.$rows['house_id'].'">View house </a><br>'; ?> 
</div> 

</div>
</div>
</body>
</html> 


<?php 

}
    }
    ?>