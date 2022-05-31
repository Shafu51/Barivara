<?php 
session_start();
if(!isset($_SESSION["email"])){
  header("location:index.php");
}
include('navbar.php');
include('tenant-engine.php');
 ?>
<style>
	.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

button:hover, a:hover {
  opacity: 0.7;
}

.form-group {
  text-align: left;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="pp.css">

 <center><h3>Your Profile</h3></center>
      <div class="container">
      <?php 
        include("config/config.php");
        $u_email= $_SESSION["email"];

        $sql="SELECT * from tenant where email='$u_email'";
        $result=mysqli_query($db,$sql);

        if(mysqli_num_rows($result)>0)
      {
          while($rows=mysqli_fetch_assoc($result)){
          
       ?>
        <body>
  <div class="profile-card">
    <div class="card-header">
      <div class="pic">
        <img src="<?php echo $rows['pp']; ?>" alt="abc">
      </div>
      <hr color="blue">
  <div class="name"><?php echo $rows['full_name']; ?>
</div>

  <div class="fa fa-envelope" style="font-size:24px;color:white">
   Gmail :
  <p class="title"><?php echo $rows['email']; ?></p>
  </div>
  
  <div class="fa fa-phone"style="font-size:24px;color:white">
  Phone Numbner :
  <p class="title"><?php echo $rows['phone_no']; ?></p>
</div>
 <div class='fas fa-map-marker-alt' style='font-size:24px;color:white'>
 Address: <p class="title"><?php echo $rows['address']; ?></p>
          </div>

          <div class='fas fa-home' style='font-size:24px;color:white'>
          Type: <p class="title"><?php echo $rows['id_type']; ?></p>
  </div>
          
        <img src="<?php echo $rows['id_photo']; ?>" alt="abc"  height="250px" width="430px">
      </div>
 

  <!-- Trigger the modal with a button -->
  <p><button type="button" class="contact-btn" data-toggle="modal" data-target="#myModal">Update Profile</button></p>

</div>

<div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Profile</h4>
        </div>
        <div class="modal-body">

            <form method="POST">
                <div class="form-group">
                  <label for="full_name">Full Name:</label>
                  <input type="hidden" value="<?php echo $rows['tenant_id']; ?>" name="tenant_id">
                  <input type="text" class="form-control" id="full_name" value="<?php echo $rows['full_name']; ?>" name="full_name">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" value="<?php echo $rows['email']; ?>" name="email" readonly>
                </div>
                <div class="form-group">
                  <label for="phone_no">Phone No.:</label>
                  <input type="text" class="form-control" id="phone_no" value="<?php echo $rows['phone_no']; ?>" name="phone_no">
                </div>
                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" class="form-control" id="address" value="<?php echo $rows['address']; ?>" name="address">
                </div>
                <div class="form-group">
      <label for="id_type">Type of ID:</label>
      <input type="text" class="form-control" value="<?php echo $rows['id_type']; ?>" name="id_type" readonly>
    </div>
    <div class="form-group">
      <label>Your Id:</label><br>
      <img src="<?php echo $rows['id_photo']; ?>" id="output_image"/ height="100px" readonly>
    </div>
                <hr>
                <center><button id="submit" name="tenant_update" class="btn btn-primary btn-block">Update</button></center><br>
                
              </form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
      
    </div>
  </div>
  




</div>
<?php }} ?>
         
</body>