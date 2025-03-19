<html>
  <center>
    <head>
        <title>display</title>
    </head>
    <body>
        <table border="1">

        <tr>
            <th>name</th>
            <th>pnumber</th>
            <th>city</th>
            <th>rollno</th>
        </tr>
        </table>
</head>
</html>   
  <?php
// Connect to the database
$host = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "raja";
$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// Query the database
$sql = "SELECT * FROM raja";
$result = mysqli_query($conn, $sql);

// Display the data in an HTML table
if (mysqli_num_rows($result) > 0) {
  
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["name"] . "</td><td>" . $row["pnumber"] . "</td><td>" . $row["city"] . $row["rollno"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No data found";
}

// Close the connection
mysqli_close($conn);
?>
</center>

