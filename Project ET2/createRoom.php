<html>
    <head>
        <title>Webex API</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <h2>Create a Room</h2>
        <form method="post" action="roomAPI.php">
            <table>
                <tr><td>Room Name</td><td><input type="text" name="room_name"></td></tr>
                <tr><td colspan="2" style="text-align:center;"><button type="submit" value="Create">Create</button></td></tr>
            </table>
        </form>
        <a href="index.php"><button>Return</button></a>
    </body>
</html>