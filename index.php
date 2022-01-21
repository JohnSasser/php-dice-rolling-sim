<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php
    // echo "\nWe are operational, Big Cat.";

    $rolls = $_POST['rolls'] ?? 10;
    $dice = $_POST['dice'] ?? 3;
    $number = (INT)$_POST['number'] ?? 6;

?>
<section>
  <form method="post" action='index.php'>

    <label for="rolls">Number of rolls </label> <br />
        <input type="number" name="rolls" value="<?=$rolls?>"> <br /><br />

    <label for="dice">Number of Dice </label> <br />
        <input type="number" name="dice" value="<?=$dice?>"> <br /><br />

    <label for="Number">Your Number 1-6 </label> <br />
        <input type="number" name="number" value="<?=$number?>"> <br /><br />

    <button type="submit"> roll the dice! </button>

  </form>

</section>

<section class="php-class">
<?php
    if($_POST) {
        $total_hits = [];
        for($i=1; $i<=$rolls; $i++) {
            $hits = 0;

            for($x=1; $x<=$dice; $x++) {
                if($number === mt_rand(1,6)) {
                    $hits++;
                }
            }
            $total_hits[$hits]++;
        }
    }

    ksort($total_hits);

    foreach($total_hits as $key=>$result) {
        echo "Your selected number appeared on a die $key times in $result rolls. <br />" ;
    }
?>
</section>





</body>
</html>


