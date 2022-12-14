<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<form action="save-form.php" method="post">
        <h1>Form data save json file</h1>
        <fieldset>
        <label for="imgwidth">Width</label>
        <input type="text" id="imgwidth" name="imgwidth" value="">
        
        <label for="imgheight">Height</label>
        <input type="text" id="imgheight" name="imgheight" value="">
        <input type="hidden" id="dealer_id" name="dealer_id" value="3487">
        </fieldset>
        <button type="submit" name="submit">Sign up</button>
    </form>
	
</body>
</html>

