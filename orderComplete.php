<?php
 

if($_GET["success"] == "true") {
    $pagetitle = "TemaSpa | Din ordre er blevet placeret!";
} else {
    $pagetitle = "TemaSpa | Der skete en fejl under placeringen af ordren!";
}

 require("header.php");
?>

<br><br>

<div class="container">
    <div class="jumbotron" style="align-self: center; align-content: center;">
    
        <?php if($_GET["success"] == "true") { ?>
            <h2 class="display-3" >Din ordre er blevet placeret!</h2>
            <div><a class="display-4" href="order.php">Vil du placere endnu en?</a></div>


        <?php } else { ?>
            <h2 class="display-3" align="center">Der skete en fejl i placeringen af ordren. Prøv igen.</h2>

            <div align="center"><a class="display-4" href="order.php">Klik her for at prøve igen!</a></div>

        <?php } ?>


    </div>
</div>


<?php require("footer.php"); ?>