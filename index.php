<?php 

include "connection.php"; 
include_once('food.php');
include_once('pou.php');

?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>home</title>
        <?php include_once('part-head.php'); ?>
    </head>
    <body class="pou" langit="pagi">
        <div class="overlay"></div>
        <?php include_once('part-header.php'); ?>
        <div class="clear"></div>
        <?php include_once('part-content.php'); ?>
        <?php include_once('part-footer.php'); ?>

        <script src="./js/jquery.js"></script>
        <script src="./js/underscore.js"></script>
        <script src="./js/backbone.js"></script>
        <script src="./js/moment-with-langs.js"></script>
        <script src="./js/app.js"></script>
    </body>
</html>

<?php 
    
$pouConfig = array(
                    // 'name' => "Adoel",
                    'gender' => 'female',
                    'weight' => 1,
                    'height' => 4 
                );

$pou = new Pou($pouConfig);
$pou->setName('Adoel');
echo $pou->getName();

$pou->initFood(new Food());
$pou->eat('basreng');
echo $pou->getEnergy();

// $pou->name = 'Tutud';

