
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
      / Nav Star /
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
          <li class="nav-item pr-4">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item pr-4">
            <a class="nav-link" href="edituser.php">Edit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4" href="logout.php">LOG OUT</a>
          </li>
          
        </ul>
      </div>
      
    </div>
  </nav> 
  <?php
   include 'classes/sql.php';
   session_start();
   $loginid = $_SESSION["id"];

  ?>
  <br><br><br><br><br>
      <form action="action.php" method="post">
          <div class=" w-25 mx-auto mt-5">
            <h3>Additional Information</h3>
              Your Address <br> 
              <input type="text" name="address" class="form-control"> <br>
              Your Phone Number <br>
              <input type="tel" name="phone" class="form-control"> <br>
              <input type="hidden" value="$loginid">
              <input type="submit" name="submitinfor" value="Submit" class="form-control btn btn-outline-success" onClick="location.href='message2.html'">
          </div>  
      </form>

                 
</body>
</html>