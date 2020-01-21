<?php

    include 'classes/sql.php';

    $s = new SQL();
    session_start();
    $id = $_SESSION['id'];
   
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $category = $_POST['categories'];
        $price = $_POST['price'];
        $pic = $_FILES['pic']['name'];
        $id = $_POST['id'];

        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["pic"]);
        $ans = $s->insertToTable($name,$category,$price,$pic);
        if($ans == 1){
            
            move_uploaded_file($_FILES['pic'],$target_file);
            
            header("Location: adminmenu.php");
        }else{
            echo 'Error';
        }
    
    }else if(isset($_POST['login'])){
        $email = $_POST['email'];
        $pass= $_POST['pass'];

        $s->getValues($email,$pass);
        
    }else if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $s->insertUserData($fname,$lname,$email,$pass);

    }else if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        // echo "test";
        $s->insertMessage($name,$email,$subject,$message);

    }else if(isset($_POST['edit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $s->editUser($fname,$lname,$email,$pass,$id);
        
    }else if(isset($_POST['search'])){
        $select = $_POST['select'];

        $cat = $s->searchImage($select);
        $_SESSION["cat"] = $cat;
        
        header("Location:userLoginDisplay.php");

    }else if(isset($_POST['buy'])){
        $itemid = $_POST['itemid'];
        $price = $_POST['price'];

        $s->insertBuy($itemid,$price,$id);
    
    }else if(isset($_POST['submitinfor'])){
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        
        $s->insertUserInfor($address,$phone);
    
    }else if($_GET['actiontype'] == 'delete'){
        $id = $_GET['id'];

        $s->deleteMessage($id);

    }else if($_GET['actiontype'] == 'del'){
        $id = $_GET['id'];

        $s->deleteOrder($id);
    }
    
?>
