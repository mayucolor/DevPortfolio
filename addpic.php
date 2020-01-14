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
    <div class="bg-success p-3 mb-5">
        ADD PICTURE
        <a href="adminmenu.php" class="text-right text-white text-decoration-none ml-3">Back to Add Furniture</a>
        <a href="logout.php" class="text-right text-white text-decoration-none ml-3">LOG OUT</a>
        
    </div>
<div class="mx-auto w-50">
    <form method="post" action="action.php" enctype="multipart/form-data" >
      <h3>ADD PICTURE</h3>

      Picture Name <br>
      <input type="text" name="name" class="form-control"> <br>
      Picture<input type='file' name="pic" class="form-control"><br>
      
      <input type='submit' value='Upload' name='upload' class="form-control btn btn-outline-success">
    </form>

</div>
  
</body>
</html>
