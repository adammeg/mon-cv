<html>
<head>
<title>les messages envoyer</title>
</head>
<body>
<?php
include 'connect.php';
// lancement de la requete
$sql = "SELECT * FROM messages";

$result = $mysqli -> query ($sql) or die ($mysqli-> error());

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "nom: " . $row["nom"]. "<br>"." prenom: " . $row["prenom"]."<br>". "mail :" . $row["mail"]."<br>". "message :" . $row["massag"]."<br>";
  }
} else {
  echo "0 results";
}
?>
</body>
</html>
