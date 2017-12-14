<?php 
        if(isset($_GET['def'])) {
            $def = $_GET["def"];
            if ($def == "place") {
                place_order();
            } else if ($def == "remove") {

                remove_order();

            } else if ($def == "logout") {
                 session_start();
                 session_destroy();

                 header("Location: index.php");
            }
        }




        function place_order() {

            $date = $_POST["date"];
            $startTime = $_POST["time"];
            $product = $_POST["product"];
            $comment = $_POST["comment"];
            

            require("config.php");

            session_start();

            if (isset($_SESSION["token"])) {
                $token = $_SESSION["token"];

                $tokenQuery = "SELECT * FROM users WHERE token='" . $token . "'";
                
                $tokenResult = $conn->query($tokenQuery);

                $row = mysqli_fetch_object($tokenResult);

                if ($row->token == $token) {
                    var_dump($row);
                    $userID = $row->ID;
                    $endTime = $startTime + 1;
                    $queryPlaceOrder = "INSERT INTO orders (UserID, OrderDate, StartTime, EndTime, ProductType, Comment) VALUES
                    (' ". $userID . "', '" . $date . "', '" . $startTime . "', '" . $endTime . "', '" . $product . "', '" . $comment . "')";

                if ($conn->query($queryPlaceOrder) == true) {
                    echo 'Order created';
                    header("Location: orderComplete.php?success=true");

                } else {
                    echo "Error: " . $queryPlaceOrder . "<br />" . $conn->error;
                    header("Location: orderComplete.php?success=false");
                }

                }

            }

        }







        ?>