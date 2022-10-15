<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil</title>
</head>
<body>
<form action="to.php">
        <fieldset>
            <legend>Nama</legend>
            <?php
            echo $_GET["nama"];
            ?>
        </fieldset>
    </form>
    halo <?php echo $_GET["nama"]; ?>
</body>
</html>