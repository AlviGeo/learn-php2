<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms - GET</title>
</head>

<body>
    <h1>Form - GET</h1>
    <form action="display.php" method="get">
        <fieldset>
            <legend>Student Enquiry Form</legend>
                <p>
                    <label for="inputText">Text: </label>
                    <input name="inputText" id="inputText" type="text" placeholder="text">
                </p>
                <p>
                    <label for="inputEmail">Email: </label>
                    <input type="text" name="inputEmail" id="inputEmail" placeholder="test@gmail.com">
                </p>
        </fieldset>
    </form>
</body>

</html>