<?php
$pagetitle = "TemaSpa | Mine ordrer";
 require("header.php");
   require("config.php");

?>

<br><br>


<?php 


   $queryUserFromToken = "SELECT * FROM users WHERE token='" . $_SESSION["token"]  . "'";
   $resultUserFromToken = $conn->query($queryUserFromToken);



   $rowUser = mysqli_fetch_object($resultUserFromToken);

   if ($rowUser->isAdmin != 1) {

    header("Location: index.php");

   }
   $queryOrderList = "SELECT * FROM orders ORDER BY OrderDate, StartTime ASC";
   $resultOrders = $conn->query($queryOrderList);

   


?>

<div class="container">

  <div class="jumbotron">
  <h2 class="display-3" >Alle ordrer:</h2>
  <br>
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Brugernavn</th>
        <th scope="col">Fulde Navn</th>
        <th scope="col">Dato/tid</th>
        <th scope="col">Type</th>
        <th scope="col">Kommentar</th>
      </tr>
    </thead>
    <tbody>
    <?php
       while ($row = $resultOrders->fetch_array()) {
        switch ($row["ProductType"]) {
          case 0:
              $productString = "Spa";
              break;
          case 1:
              $productString = "Manikure";
              break;
          case 2:
              $productString = "Damp";
              break;
          case 3: 
              $productString = "Massage";
              break;

          default:
              echo 'Sneaky bastard. There\'s no way you could be here';
      }

        $queryNames = "SELECT * FROM users WHERE ID='" . $row["UserID"] . "'";
        $resultNames = $conn->query($queryNames);
        $rowNames = mysqli_fetch_object($resultNames);
        echo '<tr>';
        echo '<td>' . $rowNames->Username . "</td>"; #Brugernavn
        echo '<td>' . $rowNames->FirstName . " " . $rowNames->LastName . "</td>"; #Fulde navn
        echo "<td>" . $row["OrderDate"] . " " . $row["StartTime"] . ":00-" . $row["EndTime"] . ":00</td>"; 
        echo "<td>" . $productString . "</td>";
        echo '<td>' . $row["Comment"] . "</td>";
        echo '</tr>';
 }   ?>

  </tbody>
  </table>
</div>
</div>


<?php require("footer.php"); ?>