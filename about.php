<!DOCTYPE html>
<html>
	<head>
		<title>Paw to Heart </title>
		<link rel="stylesheet" type="text/css" href="pet.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/about.css">
        <link rel="shortcut icon" href="data/logo2.png">
	</head>
	<body>
        <div class="container">
            <?php include 'views/menu.php'; ?>
            <h1>ABOUT</h1>
            <hr>
            <div class="row about-images">
                 <img src="http://www.kinshipcircle.org/disasters/monitor/images/10-23-11_thailand-flood-tim-gorski-kinshipcircle_8.jpg">

                <img src="http://hssaz.org/wp-content/uploads/2014/05/lost-found.jpg">

                <img src="http://www.animalalliancenyc.org/wordpress/wp-content/uploads/PRPhoto-LostandFound01.png">
            </div>
            <div class="row">
                <p id="desc">
                    Here at Paw to Heart, we believe that pets are family. With the help of the community, we serve as a beacon of hope in the midst of disaster by connecting owners with their furry family members.
                </p>
            </div>
            <div id="logo-wrapper" class="row">
                <img src="data/logo2.png">
            </div>
        </div>
        <?php include 'views/footer.php'; ?>
	</body>
</html>