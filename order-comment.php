<!doctype html>
<head>
<title>TemaSpa | Bestil Tid - Kommentar</title>
</head>

<?php

require("config.php");
require("header.php");

if (isset($_POST["product"])) {
    
            switch ($_POST["product"]) {
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
    
        if (!isset($_POST["date"])) {
    
            echo 'I don\'t know how you managed to sneak through, but good job.';
    
        } else {
            #echo $_GET["date"] . " " . $_GET["product"];
        }

?>


<br /><br />

<div class="container">
    <div class="jumbotron">
    <div class="progress" style="height: 20px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
    </div>
    <h2 class="display-3">4. Nogle kommentarer til din tid?</h2>
    <p>Maks en tweet! (280 tegn)</p>
    <form method="POST" action="orderManagement.php?def=place" style="text-align: center; margin-left: auto; margin-right: auto;">
        <div class="form-group col-md-3" style="display: none;"> <!--Lav en skjult select. Dette sørger for at vores information om select kommer med fra sidste side.-->
            <label for="product">Produkt</label>
                <select id="product" class="form-control" name="product">
                    <option value='<?php echo $_POST["product"]; ?>'><?php echo $productString; ?></option>
                </select>
        </div>

        <div class="form-group col-md-3" style="display: none;">
            <label for="orderdate">Dato</label>
            <input type="date" id="orderdate" class="form-control" name="date" value="<?php echo $_POST["date"]; ?>">
        </div>
        
        <div class="form-group col-md-3" style="display: none;"> <!--Lav en skjult select. Dette sørger for at vores information om select kommer med fra sidste side.-->
            <label for="time">Tid</label>
                <select id="time" class="form-control" name="time">
                    <option value='<?php echo $_POST["time"]; ?>'><?php echo $_POST["time"]; ?></option>
                </select>
        </div>

        
        <div class="form-group">
            <textarea name="comment" id="commentField" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary btn-lg mx-auto" type="submit">Bestil tid</button>
        </div>
    </form>
    </div>
    <!--</div>-->




<?php require("footer.php"); ?>