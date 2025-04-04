<?php 

// pengulangan

// $i = 10;

// while($i < 5){
//     echo "hello world <br>";
//     $i++;
// }

// do{
//     echo "hello world <br>";
//     $i++;
// }while($i < 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php  for($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for($j = 1 ; $j <= 5; $j++) : ?>
                    <?php $j % 2 == 1 ? $warna = "warna-baris" : $warna = ""; ?>
                    <td class="<?= $warna; ?>"><?= "$i, $j"; ?></td>
                    <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>