<?php

    // Denne sidde handler alt som har at gøre med brugerlogin/registering. Den tideligere side kalder en funktion, som defineret i if-statementet lige under, og denne side kører funktionen.

        if(isset($_GET['def'])) {
            $def = $_GET["def"];
            if ($def == "register") {
                register();
            } else if ($def == "login") {

                login();

            } else if ($def == "logout") {
                 session_start();
                 session_destroy();

                 header("Location: index.php");
            }
        }

        function login() {
            require("config.php"); // Henter db-forbindelsen
            session_start();
            $username = $_POST["username"];
            $password = $_POST["password"];

            $loginQuery = "SELECT * FROM users WHERE Username='" . $username . "'";
            
            $loginResult = $conn->query($loginQuery);

            if ($loginResult->num_rows == 1) {
                $row = mysqli_fetch_object($loginResult);
                if ($row->Password == $password) {
                    $updatedToken = openssl_random_pseudo_bytes(50);
                    $_SESSION["userID"] = $row->ID;
                    $_SESSION["token"] = $updatedToken;
                    $_SESSION["username"] = $row->Username;
                    $_SESSION["fullname"] = $row->FirstName . " " . $row->LastName;
                    $_SESSION["isAdmin"] = $row->isAdmin;

                    echo $row->ID;

                    $newTokenQuery = "UPDATE users SET token='" . $updatedToken . "' WHERE ID=" . $row->ID . "";


                    if ($conn->query($newTokenQuery) == true) {
                        echo 'Login success';
                    } else {
                        echo 'Login failed';
                    }

                    $conn->close();

                    header("Location: index.php");

                    
                    

                } else {
                    header("Location: login.php?err=true");
                }

            } else {
                header("Location: login.php?err=true");
            }


        }

        function register() {
        
        require("config.php"); // Henter databaseforbindelsen
        
        $username = $_POST["username"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $birthdate = $_POST["birthDate"];
        $gender_raw = $_POST["gender"];
        $gender = "";

        if ($gender_raw == "male") {
            $gender = 0;
        } else if ($gender_raw = "female") {
            $gender = 1;
        }

        $queryUserTaken =  "SELECT * FROM users WHERE Username = '" . $username . "'";
        $resultUserTaken = $conn->query($queryUserTaken);
        if ($resultUserTaken->num_rows == 0) {
            $queryEmailTaken = "SELECT * from users where Email = " . $email . "'";
            $resultEmailTaken = $conn->query($queryEmailTaken);
            
            if ($resultEmailTaken->num_rows == 0) {
                 $token = openssl_random_pseudo_bytes(50); // Generer et crypto-sikkert pseudo-tilfældigt tal til brug som token
                 $queryRegister = "INSERT INTO users 
                 (FirstName, LastName, Username, Password, Email, BirthDate, Gender, token, isAdmin) 
                 VALUES
                 ('" . $firstName . "', '" . $lastName . "', '" . $username . "', '" . $password . "', '" . $email . "', '" . $birthdate . "', '" . $gender . "', '" . $token . "', 0)";

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