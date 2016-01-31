<?php
require_once 'connection.php';
require_once 'models/model.php';

$q = $_GET['q']; 

$conn = getConnection();
$model = new Model($conn);
$matches = $model->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paw to Heart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="data/logo2.png">
</head>
<body>
    <?php include 'views/menu.php'; ?>
    <div class="container">

    <!-- Full Width Image Header -->
    <header class="header-image">
        <div class="headline">
            <h1>Pets are family too.</h1>
            <h2>Let's find your family together.</h2>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" src="/data/dogandowner.jpg" width="500" height="500">
            <h2 class="featurette-heading">About
                <span class="text-muted">Paw to Heart</span>
            </h2>
            <p class="lead">During natural disasters, pet owners are often seperated from their pets. Our mission is to reunite them. We believe that pets are family too. So let’s find your family together.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette -->
        <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="/data/snowball.jpeg" width="500" height="500">
            <h2 class="featurette-heading">Success 
                <span class="text-muted">Stories</span>
            </h2>
            <p class="lead">Learn more about stories like Camille and Snowball's.<br><br>"We thought we lost it all when the hurricane hit. Our home was destroyed and we weren’t allowed to evacuate with our pets. We thought we would never see our girl Snowball ever again. After settling into a safe place, we called every shelter to ask if they’d seen her, but no one had found her."</p>
        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette -->
        <div class="featurette" id="contact">
            <img class="featurette-image img-responsive pull-right" src="/data/mobile.png" width="500" height="500">
            <h2 class="featurette-heading">Mobile 
                <span class="text-muted">Application</span>
            </h2>
            <p class="lead">Coming soon.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Paw to Heart 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    </div>
</body>
</html>