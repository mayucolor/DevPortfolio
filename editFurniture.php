<?php
    require_once 'classes/sql.php';

    $id = $_GET["item_id"];
    $s = new SQL;

    $result = $s->searchItems($id);
    $item = $result['item_name'];
?>

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
        EDIT FURNITURE
        <a href="userLoginDisplay.php" class="text-right text-white text-decoration-none ml-5">PREVIEW</a>
        <a href="furniturelist.php" class="text-right text-white text-decoration-none ml-5">FURNITURE LIST</a>
        <a href="messagedisplay.php" class="text-right text-white text-decoration-none ml-5">MESSAGE</a>
        <a href="orderlist.php" class="text-right text-white text-decoration-none ml-5">ORDER LIST</a>
        <a href="userlist.php" class="text-right text-white text-decoration-none ml-5">USERS</a>
        <a href="logout.php" class="text-warning text-decoration-none ml-5">LOG OUT</a>
        
    </div>
    <div class="float-left w-50">
        <form action="action.php" method="post" class=" mt-3 ml-5" enctype="multipart/form-data">
            Name <input type="text" name="name" class="form-control" value="<?php echo $result['item_name']; ?>">
            Category 
            <select name="category" class="form-control">
                <?php
                    $items = new SQL;
                    $result1 = $items->getFurniture();
                       foreach($result1 as $row){
                            $category = $row["category"];
                            $name = $row["item_name"];

                            if($item == $name)
                                echo "<option value='$category' selected>$category</option>";
                            else
                            echo "<option value='$category'>$category</option>";
                       }
                ?>
            </select> <br>
            Price <input type="text" name="price" class="form-control" value="<?php echo $result['item_price']; ?>"> <br>
            Picture <br>
            <?php echo "<img src=upload/".$result['image']." class='w-50 m-2'>"; ?>
            <input type='file' name="pic" class="form-control"> <br>
            
            <input type="hidden" name="id" value="<?php echo $id; ?>"> <br>
            <input type="submit" name="update" value="EDIT" class="form-control btn btn-outline-success mb-5">
        
        </form>    
    </div>
    <div>
    
</body>
</html>
