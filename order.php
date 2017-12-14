<title>TemaSpa | Bestil tid </title>

<?php require("header.php"); ?>
<link rel="stylesheet" href="css/overrides.css">
<br><br>

<div class="container">
    <div class="jumbotron">
    <div class="progress" style="height: 20px;">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 20%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">20%</div>
    </div>
    <h2 class="display-3">1. Vælg produkt</h2>


        <form method="GET" action="order-date.php">
            <div class="form-group">
                <select class="form-control form-control-lg" id="inputProduct" name="product">
                    <option value="0">Boble</option>
                    <option value="1">Manikure</option>
                    <option value="2">Damp</option>
                    <option value="3">Massage</option>
                </select>
            </div>
            <button class="btn btn-primary btn-lg float-right" type="submit">Næste</button>
        </form>
    </div>
</div>


<?php require("footer.php"); ?>