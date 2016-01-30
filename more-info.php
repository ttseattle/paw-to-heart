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
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/more-info.css">
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
                <img class="pet-img" src="data/pet-images/<?= $match['img']?>">
            </div>
            <div class="col-md-8 col-md-offset-1"> 
                <br/>
                <?php include'views/info.php'; ?>
                <button class="btn btn-default">This Is My Pet!</button>
            </div>
        </div>
    </div>
</body>
</html>