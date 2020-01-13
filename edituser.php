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
            <a href="userLoginDisplay.php" class="nav-link pr-4" >Back to Furniture</a>
          </li>
          <li class="nav-item">
          <a href="logout.php" class="nav-link pr-4" >LOG OUT</a>
          </li>
          
        </ul>
      </div>
      
    </div>
  </nav>
  <!--/ Nav End /-->
    <br><br><br><br>
    <form action="action.php" method="post">
          <div class=" w-25 mx-auto mt-5">
            <h3>E D I T U S E R</h3>
              First Name <br> 
              <input type="text" name="fname" class="form-control"> <br>
              Last Name <br>
              <input type="text" name="lname" class="form-control"> <br>
              Email <br> 
              <input type="email" name="email" class="form-control"> <br>
              Password <br> 
              <input type="password" name="pass" class="form-control"> <br>
        
              <input type="submit" name="edit" value="Edit" class="form-control btn btn-outline-success">
          </div>  
      </form>
</body>
</html>