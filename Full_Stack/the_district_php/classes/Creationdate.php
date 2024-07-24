<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation_date</title>
</head>
<body>
    <?php 
    $date=date_create('now');
    echo date_format($date,"Y/m/d");

    
    ?>
</body>
</html>