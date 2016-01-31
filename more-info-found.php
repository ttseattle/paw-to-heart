<?php
require_once 'connection.php';
require_once 'models/model.php';

$q = $_GET['q']; 

// setting up connection to database
$url = parse_url($_SERVER['REQUEST_URI']); 
$id = $url['query'];

$conn = getConnection();
$model = new Model($conn);
$match = $model->getById($id)[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paw to Heart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/more-info.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="data/logo2.png">
</head>
<body>
    <?php include 'views/menu.php'; ?>
    <div class="container">
        <div class="row pet-container">
            <?php
            $img = $match['img'];
            $species = $match['species'];
            $breed = $match['breed'];
            $color = $match['color'];
            $gender = $match['gender'];
            $size = $match['size'];
            $more = $match['more'];
            ?>
            <div class="col-md-3"> 
                <img class="pet-img img-circle" src="data/pet-images/<?= $match['img']?>">
            </div>
            <div class="col-md-8 col-md-offset-1"> 
                <br/>
                <?php include'views/info.php'; ?>
                    <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">This is my Pet!</button>
            </div>
        </div>
    </div>
    <?php include 'views/footer.php'; ?>
    

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Hooray!</h4>
        </div>
        <div class="modal-body">
            <p> We are connecting you with the person who found your pet! Expect an email soon.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>

    </div>
    </div>
</body>
</html>