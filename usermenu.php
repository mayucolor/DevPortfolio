<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="bg-success p-3 mb-5">
        BUY FURNITURE
        <a href="edituser.php" class="text-right text-white text-decoration-none ml-3">EDIT</a>
        <a href="logout.php" class="text-right text-white text-decoration-none ml-3">LOG OUT</a>
    </div>
    <form action="" method="post" class="mx-auto w-50 mt-3">
        First name <input type="text" class="form-control"> <br>
        Select Furniture 
        <select name="" id="" class="form-control">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
        </select> <br>
        Price <input type="text" class="form-control"> <br>
        <input type="submit" name="submit" value="BUY" class="form-control btn btn-outline-success mb-3">
        <input type="submit" name="submit" value="CANCEL" class="form-control btn btn-outline-success">
    </form>
    

</body>
</html>
