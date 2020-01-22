<?php
    session_start();
    require_once 'classes/sql.php';

    $furniture = new SQL;

    $result = $furniture->getFurnitureList();
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
        USERS
        <a href="adminmenu.php" class="text-right text-white text-decoration-none ml-5">ADD FURNITURE</a>
        <a href="furniturelist.php" class="text-right text-white text-decoration-none ml-5">FURNITURE LIST</a>
        <a href="messagedisplay.php" class="text-right text-white text-decoration-none ml-5">MESSAGE</a>
        <a href="orderlist.php" class="text-right text-white text-decoration-none ml-5">ORDER LIST</a>
        <a href="userlist.php" class="text-right text-white text-decoration-none ml-5">USERS</a>
        <a href="logout.php" class="text-warning text-decoration-none ml-5">LOG OUT</a>
        
    </div>
    <table class="table w-75 mx-auto" style="table-layout:fixed;">
        <th>ITEM ID</th>
        <th>ITEM NAME</th>
        <th>CATEGORY</th>
        <th>ITEM PRICE</th>
        <th>IMAGE</th>
        <th></th>
        <th></th>
        
        <?php
            foreach($result as $row){
                $id = $row['item_id'];
            echo"<tr>
                    <td>".$row['item_id']."</td>
                    <td>".$row['item_name']."</td>
                    <td>".$row['category']."</td>
                    <td> ".number_format($row['item_price'])."</td>
                    <td><img src=upload/".$row['image']." class='w-50'></td>
                    <td> <a href='editFurniture.php?item_id=$id'> Edit </a></td>
                    <td> <a href='action.php?actiontype=delete2&id=$id'> Delete </a></td>
                </tr>";
            }
            
        ?>
    </table>
    
</body>
</html>
