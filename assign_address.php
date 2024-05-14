<?php 
$con  = mysqli_connect("localhost","dev","devs","social_media_db");

$user_location_sql = "SELECT * FROM users_locations";
$user_location_query = mysqli_query($con,$user_location_sql);

?>

<a href="?page=add-assign-address" class="btn btn-sm btn-success" >Set User Address</a>
          
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">Username</th>
                  <th scope="col">Location</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php while ($row = mysqli_fetch_array($user_location_query, MYSQLI_ASSOC)) : 

        
          
          $user_sql = "SELECT * FROM users WHERE id = ".$row['user_id']."";
          $user_query =  mysqli_query($con,$user_sql);
          $user_row   = mysqli_fetch_assoc($user_query); 
          
          $location_sql = "SELECT * FROM locations WHERE id = ".$row['location_id']."";
          $location_query =  mysqli_query($con,$location_sql);
          $location_row   = mysqli_fetch_assoc($location_query);
          ?>
                  <td><?php echo $user_row['username'];?></td>
                  <td><?php echo $location_row['country'];?></td>
                  <td>
                    <button class="btn btn-sm btn-info">Edit</button>
                    <button class="btn btn-sm btn-danger">Delete</button>
                  </td>
                </tr>
            <?php endwhile; ?>
               
              </tbody>
            </table>