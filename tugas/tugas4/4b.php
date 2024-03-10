<?php
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 PHP</title>
</head>
<body>
    <h3>Macam-Macam Perangkat Keras Komputer</h3>
    <ol>
        <?php for($i = 0 ; $i < count($hardware) ; $i++) { ?>

            <li><?php echo $hardware[$i] ; ?> </li>
            <?php } ?>

    </ol><br>

            <h3>Macam-Macam Perangkat Keras Komputer baru</h3>

            <ol>
                <?php array_push($hardware, "Card Reader", "Modem"); asort($hardware); ?>
                <?php foreach($hardware as $hdr): ?>
                <li><?= $hdr; ?></li>
                <?php endforeach;   ?>
            </ol><br>
    
</body>
</html>