<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $building = $_POST['building'];

  $data = "Name: $name\nEmail: $email\nBuilding/Room: $building\n";
  file_put_contents('reservations.txt', $data, FILE_APPEND);

  header('Location: thank-you.html');
  exit;
} else {
  header('Location: index.html');
  exit;
}
?>
