<!-- Import af Header samt titelsætning -->

<title>TemaSpa | Log ind </title>

<?php require("header.php");
?>


</body>

<body>
    
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
            <h2 class="form-signin-heading">Registrer</h2>
            <div class="form-group">
            <label for="inputUsername">Brugernavn</label>
            <input type="text" id="inputUsername" class="form-control" placeholder="Brugernavn" required autofocus>
            </div>
            <div class="form-group">
            <label for="inputEmail">E-mail Addresse</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="E-mail Addresse" required autofocus>
            </div>
            <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
            <label for="inputPasswordConfirm">Gentag Password</label>
            <input type="password" id="inputPasswordConfirm" class="form-control" placeholder="Gentag Password" required>
            </div>

            <div class="form-group">
                <label for="birthdate">Fødselsdato</label>
                <input type="date" id="birthdate" class="form-control" placeholder="Fødselsdato">
            </div>

            <div class="form-group">
                <label for="gender">Køn</label>
                <select id="gender" class="form-control" type="gender" placeholder="Køn">
                    <option value="female">Kvinde</option>
                    <option value="male">Mand</option>
                </select>
            </div>

            <div class="checkbox">
            <label class="custom-control custom-checkbox">
                <input type="checkbox" value="read-tos" class="custom-control-input" required> 
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description">Jeg har læst og er enig med vores <a href="#tbi">Brugerbetingelser</a>.</span>
            </label>

            </div>
            <div class="form-group">
            <button class="btn btn-primary btn-large btn-block" type="submit" id="register">Registrer</button>
            </div>
        </form>

        <!-- Divider, samt tilbage knap (som bruger JavaScript til at gå en side tilbage) og registrer knap -->
        <hr class="featurette-divider" /> 
        <a href="index.php"> <-Tilbage til start</a>
        <a href="login.php" class="float-right">Har du allerede en bruger? Log ind!</a>

        </div>
</div>

<div class="col-3"></div>
</div>

</div>

    <?php require("footer.php");
?>
