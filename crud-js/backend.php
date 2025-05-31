<?php
$file = 'data.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $json = file_get_contents('php://input');
  file_put_contents($file, $json);
  echo json_encode(["status" => "success"]);
} else {
  if (!file_exists($file)) {
    file_put_contents($file, '[]');
  }
  echo file_get_contents($file);
}
?>
