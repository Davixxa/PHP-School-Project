<?php require("header.php");

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


?>

<br><br>
<?php 
                global $productString;
                if (isset($_GET["product"])) { ?>
<div class="container">
    <div class="jumbotron">
    <div class="progress" style="height: 20px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">40% </div>
    </div>
    <h2 class="display-3">2. Vælg dato</h2>


        <form method="GET" action="order-time.php">

        <div class="form-group col-md-3" style="display: none;"> <!--Lav en skjult select. Dette sørger for at vores information om select kommer med fra sidste side.-->
                    <label for="product">Produkt</label>
                    <select id="product" class="form-control" name="product" placeholder="Produkt">
                        <option value='<?php echo $_GET["product"]; ?>'><?php echo $productString; ?></option>
                    </select>
                </div>
            
           <!-- <div class="form-group">
            <label for="disabledProduct">Produkt</label>
            <select id="disabledProduct" class="form-groupform-control" disabled>
                <option value='<?php #echo $_GET["product"]; ?>'><?php #echo $productString; ?></option>
            </select>
            </div>
                -->
            
            <div class="form-group col-md-3">
                    <label for="orderdate">Dato</label>
                    <input type="date" id="orderdate" class="form-control" name="date" placeholder="Dato" required>
                </div>
            <hr>
            <a href="#" onclick="window.history.back();" class="btn btn-primary btn-lg float-left">Tilbage</a>
            <button class="btn btn-primary btn-lg float-right" type="submit">Næste</button>
        </form>
        <?php } ?>
    </div>
</div>




<?php require("footer.php"); ?>