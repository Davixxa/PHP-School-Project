<!-- Import af Header samt titelsætning -->

<title>TemaSpa | Log ind </title>

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
        
    <!-- Form magi - nemmere forklaret sammen -->

        <form class="form-signin">
            <h2 class="form-signin-heading">Log ind</h2>
            <div class="form-group">
            <label for="inputUsername">Brugernavn</label>
            <input type="text" id="inputUsername" class="form-control" placeholder="Brugernavn" required autofocus>
            </div>
            <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <span class="checkbox">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" value="remember-me" class="custom-control-input"> 
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Husk mig</span>
            </label>
            </span>
            <button class="btn btn-primary float-right" type="submit">Log ind</button>
            
        </form>

        <!-- Divider, samt tilbage knap (som bruger JavaScript til at gå en side tilbage) og registrer knap -->
        <hr class="featurette-divider" /> 
        <a href="#" onclick="window.history.back();"> <-Tilbage</a>
        <a href="register.php" class="float-right">Har du ikke en bruger? Registrer!</a>

        </div>
</div>

<!--Kommentar, som skaber en sidste bootstrap kolonne, for at bruge alle Bootstraps 12 kolonner-->
<div class="col-3"></div>
</div>

</div>

    <?php require("footer.php");
?>
