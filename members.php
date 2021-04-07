<?php
$servername = "localhost";
$username = "id16498068_bethisrael";
$password = "GenesisGonzalez.09";
$dbname = "id16498068_beth";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO miembros (name, email)
  VALUES ('$_POST[name]', '$_POST[email]')";
  // use exec() because no results are returned
  $conn->exec($sql);
//   echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
header("location: thanks.html");
?>
