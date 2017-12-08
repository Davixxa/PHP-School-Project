<?php

    

        if(isset($_GET['def'])) {
            $def = $_GET["def"];
            if ($def == "register") {
                register();
            }
        }



        function register() {
        
        require("config.php");
        
        $username = $_POST["username"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $birthdate = $_POST["birthDate"];
        $gender = $_POST["gender"];

        $queryUserTaken =  "SELECT * FROM users WHERE Username = '" . $username . "'";
        $resultUserTaken = $conn->query($queryUserTaken);
        if ($resultUserTaken->num_rows == 0) {
            $queryEmailTaken = "SELECT * from users where Email = " . $email . "'";
            $resultEmailTaken = $conn->query($queryEmailTaken);
            
            if ($resultEmailTaken->num_rows == 0) {
                 $token = openssl_random_pseudo_bytes(50);
                 $queryRegister = "INSERT INTO users 
                 (FirstName, LastName, Username, Password, Email, BirthDate, Gender, token) 
                 VALUES
                 ('" . $firstName . "', '" . $lastName . "', '" . $username . "', '" . $password . "', '" . $email . "', '" . $birthdate . "', '" . $gender . "', '" . $token . "')";

                 if ($conn->query($queryRegister) == true) {
                     echo 'User created';

                 } else {
                     echo "Error: " . $queryRegister . "<br />" . $conn->error;
                 }

                }

                

        #$conn

        }
        else {
            echo 'Username is not available or email already in use';
        }

        $conn->close();
        header('Location:    index.php');
    
        


        }

?>