<?php 
// Variables 
$title = "Nour Houmsi";
$num =  40;
$float = 3.14;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " - Home Page"?></title>
</head>
<body>
    <?php 
    echo "<h1> Welcome to $title </h1>";
    echo $num;
    echo "<br>";
    echo $float;
    
    ?>
</body>
</html>