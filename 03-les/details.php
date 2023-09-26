<?php

require "./includes/array.includes.php";
$currentUser = $_GET['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Details <?php echo $currentUser; ?></h1>

<?php

// looping through the array inside the selected user so that we get the details
    foreach ($members[$currentUser] as $details) {
        echo $details . "<br>";
    }
?>
</body>
</html>