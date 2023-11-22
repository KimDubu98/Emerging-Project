<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Access Token</title>
</head>

<body>
    <h1>Enter Your Access Token</h1><hr>
    <div>
        <form action="roomList.php" method="post">
            <label for="accessToken">Insert Your Token Here</label>
            <input type="text" name="accessToken" id="accessToken">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>