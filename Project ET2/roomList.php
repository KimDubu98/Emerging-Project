<?php
include 'config.php';

$accessToken = '';

if (isset($_POST['accessToken'])) {
    $accessToken = $_POST['accessToken'];
} 
if (isset($_GET['accessToken'])) {
    $accessToken = $_GET['accessToken'];
}

$get_spaces = callforAPI('GET', 'https://api.ciscospark.com/v1/rooms', false, $accessToken);
$response = json_decode($get_spaces, true);
echo "<link rel='stylesheet' href='style.css'>";
echo "<h2>Webex Room List</h2>";
echo "<hr>";
echo "<table border='2'>";
echo "<tr><th>Room Name</th><th>Room Type</th><th>Date Created</th><th>Action</th></tr>";

foreach ($response as $value) {
    foreach ($value as $index => $row) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['title']) . "</td>";
        echo "<td>" . htmlspecialchars($row['type']) . "</td>";

        // Format the date if 'created' is a timestamp
        $createdDate = date('Y-m-d H:i:s', strtotime($row['created']));
        echo "<td>" . htmlspecialchars($createdDate) . "</td>";

        echo '<td><a target="blank" href="call.php?destination=' . $row['id'] . '&token=' . $accessToken . '">Click to Call</a></td>';
        echo "</tr>";
    }
}

echo "</table>";
echo "<br><br><a href='createRoom.php'><button>Create a New Room</button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href='index.php'><button>Re-Enter Access Token</button></a>";
echo "<br><br><h2>Join a Meeting</h2>";

echo "<label for='token'>Access Token</label>";
echo "<input type='text' name='token' id='token'>";
echo '<button type="submit" name="go" href="joinMeeting.php?token='.$accessToken.'">Go</button>';

?>
