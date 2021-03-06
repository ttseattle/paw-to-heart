<?php
require_once 'connection.php';
require_once 'models/model.php';

$q = $_GET['q']; 

$conn = getConnection();
$model = new Model($conn);
$matches = $model->getFound();

$selectOption = isset($_POST['taskOption']) ? $_POST['taskOption'] : 'all'; 
if (isset($selectOption)) {
    $matches = $model->getFoundBySpecies($selectOption);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paw to Heart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="data/logo2.png">
</head>
<body>
    <?php include 'views/menu.php'; ?>
    <?php $count = 1 ?>
    <div class="container">
        <h1> BROWSE FOUND PETS </h1>
        <hr>
        <?php include 'views/selector.php'; ?>
        <p> 
        These pets were found and still looking for their owners. 
        Click on the picture to find out more about this furry friend!
        </p>
        <?php foreach($matches as $match): ?>
            <div class="pet-wrapper">
                <a href="<?php echo "more-info-found.php?" . htmlentities($match['pet_id']); ?>">
                    <img class="pet-img"  src="data/pet-images/<?= $match['img']?>">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <?php include 'views/footer.php'; ?>
</body>
</html>