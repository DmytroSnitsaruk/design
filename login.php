<?php 
namespace data;

require_once('data.php');

use PDO;
use PDOException;
use Database;

class userManager extends Database {

    public function register($login, $email, $heslo){  
        try{
            $hashed_password = password_hash($heslo, PASSWORD_BCRYPT);
            $sql = 'SELECT * from user WHERE (login = ? or email = ?) LIMIT 1';
            $statement = $this->conn->prepare($sql);
            $statement->bindParam(1, $login);
            $statement->bindParam(2, $email);
            $statement->execute();
            $existingUser = $statement->fetch();

            if($existingUser){
                echo"User already exists.";
            }

            $sql = 'INSERT INTO user (login, email, heslo) VALUES (?, ?, ?)';
            $statement = $this->conn->prepare($sql);
            $statement->bindParam(1, $login);
            $statement->bindParam(2, $email);
            $statement->bindParam(3, $hashed_password);
            $statement->execute();
            echo '<script>alert("Register succeful");</script>';

            
        } catch (Exception $e){
            echo "Chyba pri vkladani dát do DB: " . $e->getMessage();
        } finally {
            $this->conn = null;
        }
    }

    public function login($email, $heslo){  
        $sql = 'SELECT * from user WHERE email = ?';
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(1, $email);
        $statement->execute();
        $user = $statement->fetch();
    
        if(!$user){
            echo "❌ User doesnt exist";
            return;
        }
    
        $storedPass = $user['heslo'];
    
        if(!password_verify($heslo, $storedPass)){
            echo "❌ Wrong password";
            return;
        }
    
        $_SESSION['user_id'] = $user["id"];
        $_SESSION['login'] = $user["login"];
        $_SESSION['rola'] = $user["rola"];
    
        echo "<script>window.location.replace('http://localhost/design/');</script>";
    }


}

?>
