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
   $queryOrderList = "SELECT * FROM orders WHERE UserID=    " . $rowUser->ID . " ORDER BY OrderDate, StartTime ASC";
   $resultOrders = $conn->query($queryOrderList);

   


?>

<div class="container">

  <div class="jumbotron">
  <h2 class="display-3" >Dine ordrer:</h2>
  <br>
  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
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
        echo '<tr>';
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