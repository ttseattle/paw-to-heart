<!DOCTYPE html>
<html>
	<head>
		<title>Paw to Heart</title>
		<link rel="stylesheet" type="text/css" href="pet.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <link rel="shortcut icon" href="data/logo2.png">
	</head>
	<body>
        <div class="container">
            <?php include 'views/menu.php'; ?>
            <p><h1>REPORT A LOST PET</h1></p>
            <hr>
            <fieldset>
                <legend>Pet Information</legend>
                <p>
                    Species: <input type="text"  size="10" name="species"> 
                    Breed: <input type="text"  size="10" name="breed">
                    Size: <select name="size">
                            <optgroup label="Size"> 
                                <option>Small</option>
                                <option>Medium</option>
                                <option>Large</option>
                            </optgroup>
                        </select>
                    Color: <input type="text"  size="10" name="color"> </br>
                    Gender: <input type="radio" name="gender" value="female" /> Female
                            <input type="radio" name="gender" value="male" /> Male </br>
                    Date Found (xx/xx/xxxx): <input type="text"  size="10" name="date_found"> </br>
                    <form action="demo_form.asp">
                        <input type="file" name="pic" accept="image/*">
                        <input type="submit">
                    </form>
                    Additional Information: <textarea rows="6" cols="40" id="text_box"></textarea>

                </p>
            </fieldset>
            <fieldset>
                <legend>Person Information</legend>
                <p>
                    First Name: <input type="text"  size="10" name="first_name">
                    Last Name: <input type="text"  size="10" name="last_name"> </br>
                    Phone Number: <input type="text"  size="10" name="phone_number"> </br>
                    Email Address: <input type="text"  size="10" name="email_address"> </br>
                    Address: <input type="text"  size="10" name="address"> 
                    City: <input type="text"  size="10" name="city">
                    State (abbreviated): <input type="text"  size="10" name="state">
                    Zip: <input type="text"  size="10" name="zip code">
                </p>
            </fieldset>
        </div>
        <?php include 'views/footer.php'; ?>
	</body>
</html>