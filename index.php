<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    <div class="container">
        <?php include 'template/navbar.php' ?>
        
        <?php 
        if (isset($_GET['page'])) {

          if ($_GET['page'] == 'user') {

            include 'user_list.php';

         } elseif($_GET['page'] == 'location') {
            include 'location.php';

         } elseif($_GET['page'] == 'assign-address') {

          include 'assign_address.php';

       } elseif($_GET['page'] == 'add-assign-address') {

         include 'add_assign_address.php';

      } elseif($_GET['page'] == 'user_add') {

        include 'user_add.php';

     }
      else {
           echo "no page found or 404";
         }

        } else {

          include 'user_list.php';
        }

        
         
          
        
        
        
        
        
        ?>

    

        
          
        
        
        
        
    

    </div>


  




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
