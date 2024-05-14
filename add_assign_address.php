<?php 
$con  = mysqli_connect("localhost","dev","devs","social_media_db");

$users_sql = "SELECT * FROM users";
$users_query = mysqli_query($con,$users_sql);

$location_sql = "SELECT * FROM locations";
$location_query = mysqli_query($con,$location_sql);

?>

<div class="row">

<form action="assign_address_create.php" method="POST">

<div class="col-md-3"> </div>
<div class="col-md-4">

<div class="mb-3">

  <label for="exampleFormControlInput1" class="form-label">Select User: </label>

  <select name="user" id="" class="form-control">
  <?php while ($users_row = mysqli_fetch_array($users_query, MYSQLI_ASSOC)) { ?> 
     <option value="<?php echo $users_row['id']; ?>"><?php echo $users_row['username']; ?></option>
  <?php } ?>
  </select>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Select Location: </label>
  <select name="location" id="" class="form-control">
  <?php while ($location_row = mysqli_fetch_array($location_query, MYSQLI_ASSOC)) { ?> 
     <option value="<?php echo $location_row['id']; ?>"><?php echo $location_row['country']; ?></option>
  <?php } ?>
  </select>
</div>

<div class="mb-3">
 <button type="submit" class="btn btn-success"> Set Address </button>
</div>


</div>

</form>

</div>
