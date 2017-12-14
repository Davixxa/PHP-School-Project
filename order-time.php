<?php require("header.php");
      require("config.php");

    if (isset($_GET["product"])) {

        switch ($_GET["product"]) {
            case 0:
                $productString = "Boble";
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

    } else {
        echo 'Sneaky bastard. You shouldn\'t be here.';
    }

    if (!isset($_GET["date"])) {

        echo 'I don\'t know how you managed to sneak through, but good job.';

    } else {
        #echo $_GET["date"] . " " . $_GET["product"];
    }


    echo $_GET["date"] . " " . $_GET["product"];
    echo "<br>";
    $queryOrderList = "SELECT * FROM orders WHERE OrderDate='" . $_GET["date"] . "' AND ProductType=" . $_GET["product"] . "";
    $resultOrders = $conn->query($queryOrderList);
  
    $unavailable_timeslots_display = [];
    $unavailable_timeslots = [];
    while ($row = $resultOrders->fetch_array()) {
        $unavailable_timeslots_display[] = $row["StartTime"] . "-" . $row["EndTime"];
        $unavailable_timeslots[] = $row["StartTime"];
        echo "Row: " . $row["ID"] . " " . $row["OrderDate"] . " " . $row["StartTime"] . " " . $row["EndTime"] . " " . $row["ProductType"] . " " . $row["Comment"];
    }



?>
<div class="container">
    <div class="jumbotron">
    <div class="progress" style="height: 20px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">60%</div>
    </div>
    <h2 class="display-3">3. Vælg tidspunkt</h2>
        <form method="GET" action="order-comment.php">
                <div class="form-group col-md-3" style="display: none;"> <!--Lav en skjult select. Dette sørger for at vores information om select kommer med fra sidste side.-->
                    <label for="product">Produkt</label>
                    <select id="product" class="form-control" name="product" placeholder="Produkt">
                        <option value='<?php echo $_GET["product"]; ?>'><?php echo $productString; ?></option>
                    </select>
                </div>

                <div class="form-group col-md-3" style="display: none;">
                    <label for="orderdate">Dato</label>
                    <input type="date" id="orderdate" class="form-control" name="date" value="<?php echo $_GET["date"]; ?>" placeholder="Dato">
                </div>

                <div class="form-group">
                    <select class="form-control form-control-lg" id="inputTime" name="time">
                    <?php global $unavailable_timeslots;
                            for ($i=10; $i < 17; $i++) {

                            if (in_array($i,$unavailable_timeslots)) {

                            } else {
                                $num = $i+1;
                                echo "<option value='$i'>$i-$num</option>"; 
                            }

                        }
                        ?>    
                    </select>
                </div>
            <hr>
            <a href="#" onclick="window.history.back();" class="btn btn-primary btn-lg float-left">Tilbage</a>
            <button class="btn btn-primary btn-lg float-right" type="submit">Næste</button>
        </form>
    </div>
    </div>


<br><br>
<?php require("footer.php"); ?>