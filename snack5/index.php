<!-- ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, unde animi! Quod esse, exercitationem illum nemo recusandae. velit quia quo vitae saepe accusamus tempore? Beatae quasi voluptatibus repellendus et accusantium. voluptates debitis commodi in assumenda nemo sapiente quisquam aliquam officiis amet maxime maiores natus laborum, quibusdam laudantium numquam. Labore, quibusdam';

$par = explode(".",$text);
echo $par[0];
echo $par[1];

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
    <ul>
        <?php foreach($par as $key=>$value) : ?>
        <li>
            <p><?= $value; ?></p>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>