<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <head>
      <meta charset="UTF-8">
      <title>Title</title>
      <script src="scripts/token.js"></script>
      <link rel="stylesheet" href="styles/index.css"
  </head>
  <body>


  <p>Feature test</p>



<?php

function IdGenerator($length = 6) {
    $characters = 'ABCDEFHIJKLMNOPQRSTUVWXYZ2345679';
    $strlen = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $strlen - 1)];
    }
    return $randomString;
}
echo "Your personal ID: ".IdGenerator();


?>
    </body>

</html>
