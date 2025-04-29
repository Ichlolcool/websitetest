<?php
// Get the visitor's IP address
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// Save the IP to a file
file_put_contents('ips.txt', $visitor_ip . "\n", FILE_APPEND);

// Display IP to the visitor
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Visitor IP Logger</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fafafa;
      text-align: center;
      padding-top: 50px;
    }
    h1 {
      color: #333;
    }
  </style>
</head>
<body>
  <h1>Your IQ is:</h1>
  <p> 1 <p>
</body>
</html>
