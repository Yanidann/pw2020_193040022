<?php
    $daftarpemainbolaterkenal = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", 
                                 "Zlatan Ibrahimovic", "Neymar Jr"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan4b</title>

    <style>
        .new-push {
            color: blue;
        }
    </style>
</head>
<body>
    <h4>Daftar pemain bola terkenal</h4>
        <ol>
            <?php
                foreach ($daftarpemainbolaterkenal as $orang) :?>
                    <li><?= $orang; ?></li>
            <?php endforeach; ?>
        </ol>
        <br>

        <?php
            array_push($daftarpemainbolaterkenal, "Luca Modric", "Sadio Mane");
            asort($daftarpemainbolaterkenal)
        ?>

    <h4>Daftar pemain bola terkenal baru</h4>
        <ol>
            <?php
                foreach ($daftarpemainbolaterkenal as $pemain => $orang) :?>
                <li class="<?= $pemain > 4 ? 'new-push':'' ?>"><?= $orang; ?></li>   
                <?php endforeach; ?>
        </ol>
</body>
</html>
