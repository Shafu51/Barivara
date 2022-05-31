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

<iframe width="100%" height="300" frameborder="0" style="border:0;margin:0;padding:0;" src="<?php echo "https://www.google.com/maps/embed/v1/place?q=".$_GET['search_property']."&amp;key=AIzaSyDI9QYjXGSyZEb6wX1onVpDvbshsAVWpGo";?>"></iframe>
<?php 
    $q_string = is_string($_GET['search_property']) ? $_GET['search_property'] : '';
    $min = is_string($_GET['min']) ? $_GET['min'] : '';
    $max = is_string($_GET['max']) ? $_GET['max'] : '';
    $house_type = is_string($_GET['house_type']) ? $_GET['house_type'] : '';

    $condition = "";

    if($house_type != ''){
        $condition .= " AND house_type = '".$house_type."'";
    }
    
    if($min != '' && $max != ''){
        $condition .= " AND price BETWEEN $min AND $max";
        // echo $condition;exit;
    }

    // echo $condition;exit;

    $sql="SELECT * FROM add_property WHERE concat(city,house_type) LIKE '%$q_string%' $condition";

    $query=mysqli_query($db,$sql);

    echo '<center><h1>Searched Houses</h1></center>';

    if(mysqli_num_rows($query)>0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
        $house_id=$rows['house_id'];

?>


<div class="col-sm-2">
<div class="card">
<?php


        $sql2="SELECT * FROM property_photo where house_id='$house_id'";
    $query2=mysqli_query($db,$sql2);

    if(mysqli_num_rows($query2)>0)
    {
        $row=mysqli_fetch_assoc($query2); 
        $photo=$row['p_photo'];
    }?>
    <img class="image" src="<?php echo "owner/".$photo ?>" onerror="this.src='./images/error.png'" alt="photo">

  <h4><b><?php echo $rows['house_type']; ?></b></h4> 
  <p><?php echo $rows['city'].', '.$rows['sqft'] ?></p> 
  <p><?php echo '<a href="view-property.php?house_id='.$rows['house_id'].'"  class="btn btn-lg btn-primary btn-block" >View house </a><br>'; ?></p><br>
</div>
</div>

</body>
</html> 


<?php 

}
    }

    else{
    	echo "<center><h3>Searched house not found...</h3></center>";
    }
    ?>