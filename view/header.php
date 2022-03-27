<!DOCTYPE html>
<html>
<head>
    <title>Forum ver 2 - dynamic JSON</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="dynamic.js"></script>
</head>
<body>
<header>
  <h1>
  Forum ver 2 - dynamic JSON
  </h1>
</header>
<nav>
        <a href="../">Home</a>
        <?php for($n=1;$n<=10;$n++) { if( is_dir("../zadanie".$n) ) { ?>
        <a href="../zadanie<?=$n?>">Zadanie <?=$n?></a>
        <?php } } ?>
</nav>