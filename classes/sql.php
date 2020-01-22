<?php
    include 'Database.php';

    class SQL extends Database{
        public function insertToTable($name,$category,$price,$pic){
            $sql= "INSERT INTO items(item_name, category, item_price,image) VALUES('$name','$category','$price','$pic')";

            if($this->conn->query($sql)){
                // echo $pic;
                return 1;
            }else{
                echo "Not saved " .$this->conn->error;
                return 0;
            }
        }

        public function searchSpecificImage($id){
            $sql = "SELECT * FROM  pic WHERE id = '$id'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            return $row;
        }
        
        public function showAllImages(){
            $sql = "SELECT * FROM items";

            $rows = array();
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }

                return $rows;
            }
        }
        public function getFurniture(){
            $sql = "SELECT * FROM items group by category";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;

        }
        
        public function searchImage($select){
            $sql = "SELECT * FROM items WHERE category = '$select' ";
            $result = $this->conn->query($sql);
            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;

        }

        public function getValues($email,$pass){
            $sql = "SELECT*FROM login WHERE email = '$email' AND password = '$pass'";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_SESSION['id'] = $row["loginid"];
                   
                    if($row["status"]=="A"){
                        header("Location: adminmenu.php");
                    }else{
                        header("Location: userLoginDisplay.php");
                    }
                }
            }else{
                echo "Email and password error";
            }
        }

        public function insertUserData($fname,$lname,$email,$pass){
    
            $sql = "INSERT INTO login(email, password) VALUE ('$email','$pass')";
            
            if($this->conn->query($sql)){
                $lastID = $this->conn->insert_id;

                $sql2 = "INSERT INTO user (first_name,last_name,loginid) VALUES ('$fname', '$lname','$lastID')";
                 if($this->conn->query($sql2)){
                    header('Location: message.html');
                }else{
                    echo 'Error'.$this->conn->error;
                }
            }
        }
        
        public function insertMessage($name,$email,$subject,$message){
    
            $sql = "INSERT INTO message(name, email, subject, message)
                                VALUES ('$name','$email','$subject','$message')";
            
            if($this->conn->query($sql)){
                header('Location: message.html');
            }else{
                echo "Error".$this->conn->error;
            }
        }

        public function getMessage(){
            $sql = "SELECT * FROM message";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;

        }

        public function deleteMessage($id){
            $sql = "DELETE FROM message WHERE id='$id'";

            if($this->conn->query($sql)){
                header("Location: messagedisplay.php");
            }else{
                echo "Error in deleting." .$this->conn->error;
            }
        }

        public function editUser($fname,$lname,$email,$pass,$id){
                
            $sql = "UPDATE user INNER JOIN login ON user.loginid = login.loginid
                    SET user.first_name = '$fname',
                        user.last_name = '$lname',
                        login.email = '$email',
                        login.password = '$pass' WHERE user.loginid = '$id'";

            
            if($this->conn->query($sql)){
                header("Location: userLoginDisplay.php");

            }else{
                echo "Error is updating." .$this->conn->error;
            }
        } 

        public function getSpecificUser($id){
            $sql = "SELECT * FROM user INNER JOIN login On user.loginid = login.loginid
                    WHERE user.loginid = '$id'";

            $result = $this->conn->query($sql);

            $row = $result->fetch_assoc();

            return $row;
        }

        public function insertBuy($itemid,$price,$id){

           
            $sql = "INSERT INTO buy(item_id, quantity, item_price, loginid)
                        VALUES ('$itemid',1,'$price','$id')";

            if($this->conn->query($sql)){
                header('Location: userLoginDisplay.php');
            }else{
                echo "Error".$this->conn->error;
            }
    
        }

        public function displayOrder(){
            
            $sql = "SELECT * FROM buy INNER JOIN items ON buy.item_id = items.item_id
                    WHERE buy.loginid ";


            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;

        }
        public function deleteOrder($id){
            $sql = "DELETE FROM buy WHERE id='$id'";

            if($this->conn->query($sql)){
                header("Location: ordermenu.php");
            }else{
                echo "Error in deleting." .$this->conn->error;
            }
        }
        public function getOrder(){
            $sql = "SELECT * FROM buy INNER JOIN items ON buy.item_id = items.item_id INNER JOIN user ON buy.loginid = user.loginid";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;

        }
        public function getUsers(){
            $sql = "SELECT * FROM user INNER JOIN login ON user.loginid = login.loginid";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;

        }
        public function insertUserInfor($address,$phone){
            $loginid = $_SESSION['id'];
            
            $sql = "UPDATE user SET address='$address', phoneNum='$phone' WHERE loginid ='$loginid'";

            if($this->conn->query($sql)){
                header('Location: message2.html');
            }else{
                echo "Error".$this->conn->error;
            }
        }
        public function getFurnitureList(){
            $sql = "SELECT * FROM items";
            $result = $this->conn->query($sql);

            $rows = array();

            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;

        }
        public function deleteFurniture($id){
            $sql = "DELETE FROM items WHERE item_id='$id'";

            if($this->conn->query($sql)){
                header("Location: furniturelist.php");
            }else{
                echo "Error in deleting." .$this->conn->error;
            }
        }
        public function searchItems($id){
        
            $sql = "SELECT * FROM items WHERE item_id='$id'";
            $result = $this->conn->query($sql);

            $row = $result->fetch_assoc();

            return $row;
        }

        public function updateItems($name, $category, $price ,$pic , $id){
            $sql = "UPDATE items 
                    SET item_name = '$name',
                        category = '$category',
                        item_price = '$price',
                        image = '$pic' WHERE item_id = '$id'";

            if($this->conn->query($sql)){
                header("Location: furniturelist.php");

            }else{
                echo "Error is updating." .$this->conn->error;
            }
        }   

    }

?>
