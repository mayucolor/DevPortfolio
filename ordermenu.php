<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Baskervville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
      <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Furniture<span class="color-b">Japan</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active pr-4" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4" href="userLoginDisplay.php">Furniture</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link pr-4" href="blog-grid.html">Blog</a>
          </li> -->
          <li class="nav-item pr-4">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item pr-4">
            <a class="nav-link" href="edituser.php">Edit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4" href="login.html">LOG OUT</a>
          </li>
          
        </ul>
      </div>
      
    </div>
  </nav>
  <!--/ Nav End /-->
  <br><br><br><br><br><br>
  <h2 class="text-center">Order Details</h2>  
                       
         <?php     
         session_start();
         include 'classes/sql.php';
     
         $buy = new SQL;
         
     
         $result = $buy->displayOrder();
        echo "<div class='text-center'>";
        echo "";
        echo "</div>"; 
         echo "<div class='card w-25 mx-auto pl-3 pt-1'>";  
          $total = 0;  
              foreach($result as $row){
                $id = $row['id'];
                echo "Item Name : ".$row['item_name']."<br>";
                echo "Item Price : $ ".number_format($row['item_price'])."<br>";
                echo "Quantity : ".$row['quantity'];
                echo "<a href='action.php?actiontype=del&id=$id' class='text-success border-bottom w-75 text-right'> Delete </a><br>";
                $total =$total+$row['item_price'];
              } 
                     
                echo "<h4>Total: $ ".number_format($total)."</h4>";
              
          echo "</div>";
          
         ?>   
         <div class="mt-3 w-25 mx-auto">
           <input type="button" value="Confirm" class="form-control btn btn-outline-success" onclick="location.href='userLoginDisplay.php'">
           <input type="button" value="Back To Orderpage" class="form-control btn btn-outline-success mt-2" onclick="location.href='userLoginDisplay.php'">
         </div>
                 
</body>
</html>