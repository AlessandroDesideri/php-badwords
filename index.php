<?php
    $text = "Lorem ipsum dolor sit amet consectetur bip adipisicing elit. Similique a iste reprehenderit assumenda molestiae atque labore natus commodi dolores. Molestias alias quae dolores beatae assumenda, aperiam quo delectus expedita repellendus.";
    $censored = $_GET["word"];
    $censoredWord = str_replace($censored, "*****", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $text; ?> </h1>
    <br>
    <h2> La stringa è lunga <?php echo strlen($text); ?> caratteri </h2>
    <br>
    <h2> La stringa censurata è lunga <?php echo strlen($censoredWord); ?></h2>
</body>
</html>