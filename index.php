<?php

require __DIR__ . '/bootstrap.php';

$container = new Container($configuration);
$monsterLoader = $container->getMonsterLoader();
$monsters = $monsterLoader->getMonsters();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Trumps</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="page-header">This is a game of top trumps made with PHP</h1>

            <?php foreach ($monsters as $monster): ?>
                <tr>
                    <td><?php echo $monster->getName(); ?></td>
                    <td><?php echo $monster->getPhysicalStrength(); ?></td>
                    <td><?php echo $monster->getFearFactor(); ?></td>
                    <td><?php echo $monster->getKillingPower(); ?></td>
                    <td><?php echo $monster->getHorrorRating(); ?></td>
                </tr>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

