<?php
    include 'Database.php';

    class SQL extends Database{
        public function insertToTable($name, $pic){
            $sql= "INSERT into pic(name, image) VALUES('$name', '$pic')";

            if($this->conn->query($sql)){
                //successful in inserting the picture
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
            $sql = "SELECT * FROM items INNER JOIN pic ON items.id = pic.id";

            $rows = array();
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }

                return $rows;
            }
        }

        public function getSpecificImage($id){
            $sql = "SELECT * FROM pic WHERE id = '$id'";
            $result = $this->conn->query($sql);

            $row = $result->fetch_assoc();

            return $row;
        }

        public function insertIntoFurniture($name,$category,$price,$id){
    
            $sql = "INSERT INTO items(item_name, category, item_price, id)
                                VALUES ('$name','$category','$price','$id')";
            
            if($this->conn->query($sql)){
                header('Location: adminmenu.php');
            }else{
                echo "Error".$this->conn->error;
            }
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
                    header("Location: edituser.php");
    
                }else{
                    echo "Error is updating." .$this->conn->error;
                }
            }   
    }

?>