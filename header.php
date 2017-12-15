    <?php require("imports/header.php");
          require_once("userManagement.php");
          session_start();
    ?>
    <title><?php echo $pagetitle; ?></title>
    <?php if ($pagetitle == "TemaSpa | Registrer") {
        echo '<script src="js/passCheck.js"></script>';
    } ?>

    <!-- Ændring i kode, så bootstrap import sker i en anden fil, hvis jeg gerne vil have bootstrap uden header  -->

</head>
<?php if ($pagetitle == "TemaSpa | Registrer") {
    echo '<body onLoad="javascript:passConfirm();">';
} else {
    echo "<body>";
} ?>
    <!-- Start af Menubar, som bruger bootstrap css-klasserne navbar, navbar-expand-lg, navbar-dark og bg-dark. 

    Inden i den har vi et link med klassen navbar-brand, som ikke fører noget sted hen

    -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">TemaSpa</a>

        <!-- Laver knappen til udfoldning af menu på mobile enheder -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Selve menu-elementerne, indkapslet i en div, så den kan udpakkes på mobiler-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Navigationslinks -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link">Hjem</a>
            </li>
            <?php if (isset($_SESSION['token'])) {
                echo '
            <li class="nav-item"><a href="order.php" class="nav-link">Bestil tid</a></li>';
            }
            ?>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">Om os</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="about.php" class="dropdown-item">Information</a>
                    <a href="about.php#WhoAreWe" class="dropdown-item">Hvem er vi?</a>
                    <a href="about.php#OurVision" class="dropdown-item">Vores vision</a>
                </div>
            </li>
            
            <li class="nav-item"><a href="#" data-toggle="modal" data-target="#contactModal" class="nav-link">Kontakt os</a></li>
        </ul>

        <!-- Seperat, spaghetti-agtig float-right til registrer og login.-->

        <ul class="navbar-nav">
            <?php if (isset($_SESSION['token'])) {
                echo "
                <li class='nav-item float-right dropdown'>
                    <a href='#' class='nav-link dropdown-toggle' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' id='loggedInDropdown'>Velkommen " . $_SESSION['username'] . "</a>
                    <div class='dropdown-menu dropdown-menu-right' aria-labelledby='loggedInDropdown'>
                    <a href='orders.php' class='dropdown-item'>Ordrer</a>";
                if (isset($_SESSION['isAdmin'])) {
                    if ($_SESSION['isAdmin'] == 1) {
                    echo "<a href='ordersAdmin.php' class='dropdown-item'>Admin</a>";
                    }
                }
                   echo "<a href='userManagement.php?def=logout' class='dropdown-item'>Log ud</a> 
                   </div>
                </li>";
            } else {
            echo "<li class='nav-item float-right'>
                <a href='login.php' class='nav-link'>Register/Login</a>
            </li>"; }
            ?>
        </ul>

        </div>

    </nav>


    <div id="contactModal" class="modal fade" role="dialog">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h3>Kontakt os</h3>    
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                </div>
                <div class="modal-body">
                    <p>Du kan kontakte os på <a href="#">+45 12 34 56 78</a> eller pr. email <a href="mailto:temaspa@davixxa.net">temaspa@davixxa.net</a></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>

    </div>

</header>
