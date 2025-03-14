<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "components/header.php"?>

    <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "první_databáze";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM první_tabulka";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo  "<Table><tbody><tr>
    <th>Id</th>
    <th>Mixér</th>
    <th>Čas než rozmixuje dítě</th>
    <th>Cena</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo  "<tr>".
    "<td>".$row["ID"] . "</td>".
    "<td>".$row["Typ_Mixeru"] ."</td>".
    "<td>".$row["Čas_než_rozmixuje_dítě_sekundy"] . " s</td>".
    "<td>".$row["Cena"]." Kč</td>" .
    "</tr>";
   
  }
  echo"</tbody></table>";
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>