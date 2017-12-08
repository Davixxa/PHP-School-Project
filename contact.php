<?php require("header.php");
?>



<br><br>

<!-- Start af Row i Bootstrap grid system -->


<div class="container container-fluid">
<div class="row">

    <!-- Bootstraps gridsystem kører på 12 kolonner. Ved at lave en tom trekolonners div skubber jeg den ud i midten, da den reele er 6 lang. -->

    <div class="col-3"></div>
<div class="jumbotron col-6">
    <div class="container container-fluid">
        
        <h2>Kontakt os</h2>
        <p>Du kan kontakte os på <a href="#">+45 12 34 56 78</a> eller pr. email <a href="mailto:temaspa@davixxa.net">temaspa@davixxa.net</a></p>



        </div>
</div>

<!--Kommentar, som skaber en sidste bootstrap kolonne, for at bruge alle Bootstraps 12 kolonner-->
<div class="col-3"></div>
</div>


<?php require("footer.php");
?>