<!--- Import af HTML hoved og Bootstrap CSS -->
<?php require("header.php");
?>

<!-- Sæt titel -->
<title>TemaSpa | Home </title>

<!-- Loading af overrides -->
<link rel="stylesheet" href="css/overrides.css">


<main role="main">
<!-- Begyndelse på carousel -->




<!--Carousel Indikatorer-->
<div class="carousel slide" id="carouselAppetizerIndicators" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="carouselAppetizerIndicators" data-slide-to="0"></li>
        <li data-target="carouselAppetizerIndicators" data-slide-to="1"></li>
        <li data-target="carouselAppetizerIndicators" data-slide-to="2"></li>
    </ol>

    <!-- Carousel Inhold -->
    <div class="carousel-inner">
        <!-- Spa -->
        <div class="carousel-item active">
            <img src="img/carousel/0.jpg" alt="" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h3>Tema Spa</h3>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
                <button class="btn btn-outline-light btn-lg" type="button">L&aelig;r mere</button>
            </div>
        </div>
        <!-- Wellness -->
        <div class="carousel-item">
            <img src="img/carousel/1.jpg" alt="" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h3>Massage</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <button class="btn btn-outline-light btn-lg" type="button">L&aelig;r mere</button>
            </div>

        </div>
        <!-- Og Andre Oplevelser -->
        <div class="carousel-item">
            <!-- data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw== -->
            <img src="img/carousel/2.png" alt="" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <h3>Andet</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, sequi!</p>
                <button class="btn btn-outline-light btn-lg" type="button">L&aelig;r mere</button>

        </div>
    </div>
    <!-- Forrige/Næste Billede Knapper -->
    <a href="#carouselAppetizerIndicators" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a href="#carouselAppetizerIndicators" class="carousel-control-next" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>



</main>

<!-- Container m/ Cards for sidste/nuværende/næste tema -->

<div class="container" align="center">
    <div class="row">
        <div class="col-lg-4 padfix">
            <div class="card" style="width: 20rem; height: 590px;">
                <img style="height: 250px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" class="card-img-top">
                <div class="card-block bs-card-padding">
                    <h4 class="card-title">Sidste uges tema</h4>
                    <p class="card-text" style="">Sidste uges tema var Halloween hvor vi pyntede uhyggeligt op til en hyggelig aften. Gæsterne blev modtaget af vores udklædte personale som indbudte gæsterne til en hyggelig og uforglemmelig aften. </p>
                    <a href="" class="btn btn-primary">Læs mere...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 padfix">
        <div class="card" style="width: 20rem; height: 590px;">
                <img style="height: 250px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" class="card-img-top">
                <div class="card-block bs-card-padding">
                    <h4 class="card-title">Denne uges tema</h4>
                    <p class="card-text">I denne uge fejrer vi julen, hvor vi har pyntet op til en hyggelig og romantisk aften i vores spa. Samtidig med oppyntningen har vi fokuseret på at duften også skal give en merværdi for kunden. Der vil til de første 100 kunder være en lille gavepose med lidt godter i fra stedets gaveshop. </p>
                    <a href="" class="btn btn-primary">Læs mere...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 padfix">
        <div class="card" style="width: 20rem; height: 590px;">
                <img style="height: 250px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" class="card-img-top">
                <div class="card-block bs-card-padding">
                    <h4 class="card-title">Næste uges tema</h4>
                    <p class="card-text">Til vores store Nytårs tema uddeles der ét glas champagne til alle kunderne. Hvis du leder efter en afslappende start på det nye år, så er Tema Spa klar med et fuldt fantastisk ophold fyldt med alt hvad kroppen har brug for at komme godt ind i det nye år. </p>
                    <a href="" class="btn btn-primary">Læs mere...</a>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Import af HTML footer og Bootstrap JavaScript-->
<?php require("footer.php"); ?>



