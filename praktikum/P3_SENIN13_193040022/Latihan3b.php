<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3b</title>
    <style>
        .kotak {
            box-shadow : 1px 1px 1px rgba(0,0,0,1);
            border : 4px solid black;
        }
    </style>
</head>
<body>
    <?php 
        $jawabanisset = "Isset adalah salah satu perintah php yang digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum. <br><br>";
        $jawabanempety = "Empty pada PHP berfungsi sebagai penanda suatu kondisi.";
        $GLOBALS ['Isset'] = $jawabanisset;
        $GLOBALS ['Empty'] = $jawabanempety;
        function soal($style){
            echo "<div class='$style'>
                  <p>$GLOBALS[Isset]</p> 
                  <p>$GLOBALS[Empty]</p>
                  </div>";
        }
    ?>
    <?php
        echo soal("kotak");
    ?>
</body>
</html>