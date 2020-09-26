<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Browser URL Using Javascript</title>
    <script>
        function goBack() {
            history.back();
        }
    </script>
</head>
<body>
    <a href="#" onClick="goBack();">Go Back</a>
    <a href="#" onClick="history.forward()">Go Forward</a>
</body>
</html>