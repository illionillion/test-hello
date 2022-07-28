<?php 

// echo "Hello World!!";
// echo "<br/>";

// $i = 0;

// $i = $i + 1;

// echo $i;

$msg = "hello world";

// echo $_GET["id"];
if (!empty($_GET["id"]) && $_GET["id"] == 1) {
    # code...
    $msg = "hello php";
} else if(!empty($_GET["id"]) && $_GET["id"] == 2){
    $msg = "hello html";
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<body>
    <h1><?php echo $msg; ?></h1>
</body>
</html>